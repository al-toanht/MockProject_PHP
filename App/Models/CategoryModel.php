<?php
class CategoryModel extends Model {
    function tableFill(){
        return 'categories';
    }
    function fieldFill(){
        return '*';
    }
    function primaryKey(){
        return 'id';
    }
    
    public function getListCategory(){
        $data= $this->db->table('categories')->select()->get();
        return $data;
    }
    // public function getDataLimit(){
    //     $data = $this->db->table('categories')->select()->limit(3,1)->orderBy('id','DESC')->get();
    //     return $data;
    // }
    public function getDetailCategory($id){
        $data= $this->db->table('categories')->where('id','=',$id)->get();
        return $data;
    }
    public function getListnotCategory($id){
        $data= $this->db->table('categories')->where('id','!=',$id)->get();
        return $data;
    }
    public function getJoin(){
        $data = $this->db->table('news')->join('categories','news.cate_id=categories.id')->get();
        return $data;
    }
    public function createCategory($data){
        $this->db->table('categories')->insert($data);
        return $this;
    }
    public function getCategoryParent(){
        $data= $this->db->table('categories')->where('parent_id','=',0)->select()->get();
        return $data;
    }
    public function updateCategory($data,$id){
        $this->db->table('categories')->where('id','=',$id)->update($data); 
        return $this;
    }
    public function deleteCategory($id){
        $this->db->table('categories')->where('id','=',$id)->delete();
        return $this;
    }
   
} 
?>