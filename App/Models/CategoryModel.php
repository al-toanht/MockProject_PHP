<?php
class CategoryModel extends Model {
    function tableFill(){
        return 'categories';
    }
    function fieldFill(){
        return '*';
    }
    
    public function getListCategory(){
        $data= $this->db->table($this->tableFill())->where('id','>',5)->orWhere('id','=','2')->select($this->fieldFill())->get();
        return $data;
    }
    public function getDetailCategory($categoryname){
        $data= $this->db->table($this->tableFill())->where('id','>',2)->where('category_name','=',$categoryname)->select($this->fieldFill())->first();
        return $data;
    }
   
} 
?>