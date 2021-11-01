<?php
abstract class Model extends Database{
    protected $db;
    function __construct(){
        $this->db = new Database();
    }
    abstract function tableFill();
    abstract function fieldFill();
    public function fetchAll(){
        $tableName= $this->tableFill();
        $fieldSelect = $this->fieldFill();
        $sql= "SELECT $fieldSelect from $tableName";
        $query= $this->db->__query($sql);
        if(!empty($query)){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }
} 
?>