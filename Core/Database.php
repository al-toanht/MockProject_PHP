<?php
class Database {
    private $__conn;
    use QueryBuilder;

    public function __construct(){
        global $db_config;
        $this->__conn = Connection::getInstance($db_config);
    }

    public function insertData($table,$data){
        $columns=implode(",",array_keys($data));

        $valuesToString= array_map(function($value){
            return "'".$value."'";
        },array_values($data));    

        $newValues= implode(",",$valuesToString);

        $sql= "INSERT INTO ${table}(${columns}) values(${newValues})";
        
        $status = $this->__query($sql);
        if($status){
            return true;
        }
        return false;
    }

    public function updateData($table,$data,$condition=''){
        $dataSet=[];

        foreach($data as $key=>$value){
            array_push($dataSet,"${key}='".$value."'");
        }

        $dataSetToString=implode(",",$dataSet);

        $sql= "UPDATE ${table} SET $dataSetToString where $condition";
        echo $sql;
        $status=$this->__query($sql);
        if($status){
            return true;
        }
        return false;
    }

    public function deleteData($table,$condition=''){
        if(!empty($condition)){
            $sql="DELETE FROM ${table} WHERE $condition";
        }else{
            $sql= "DELETE FROM ${table}";
        }
        $status=$this->__query($sql);
        if($status){
            return true;
        }
        return false;
    }

    public function __query($sql){
        try{
            $statement= $this->__conn->prepare($sql);
            $statement->execute();
            return $statement;
        }catch (Exception $exception){
            $mess = $exception->getMessage();
            App::$app->loadError('database',['message'=>$mess]);
            die();
        }
    }
    
    public function lastInsertId(){
        return $this->__conn->lastInsertId();
    }
} 
?>