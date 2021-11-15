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

    public function findCategoryByName($categoryname){
        $data = $this->db->table('categories')->select()->where('category_name','=',$categoryname)->get();
        return $data;
    }
    
    public function findCategoryByNameToUpdate($categoryname,$id){
        $data = $this->db->table('categories')->select()->where('category_name','=',$categoryname)->where('id','!=',$id)->get();
        return $data;
    }

    public function getListCategoryASC(){
        $data= $this->db->table('categories')->select()->orderBy('parent_id','ASC')->get();
        return $data;
    }

    public function getListParentCategory(){
        $data= $this->db->table('categories')->where('parent_id','=',"0")->select()->get();
        return $data;
    }
  
    public function getDetailCategory($id){
        $data= $this->db->table('categories')->where('id','=',$id)->get();
        return $data;
    }

    public function getListnotCategory($id){
        $data= $this->db->table('categories')->where('id','!=',$id)->where('parent_id','=',0)->get();
        return $data;
    }

    public function getChildIDCateByParentName($categoryname){
        $data= $this->db->table('categories c, categories p')->whereJoin('p.id','=','c.parent_id')->where('p.category_name','=',$categoryname)->select('c.id')->get();
        return $data;
    }

    public function deleteAllChildCategory($id){
        $this->db->table('categories')->whereIn('id','IN',$id)->delete();
        return $this;
    }
    
    public function getChildIDCateByParentID($categoryid){
        $data= $this->db->table('categories c, categories p')->whereJoin('p.id','=','c.parent_id')->where('p.id','=',$categoryid)->select('c.id')->get();
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