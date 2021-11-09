<?php
class NewsModel extends Model{
    function tableFill(){
        return 'news';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    public function getListNews(){
        $data= $this->db->table('news')->join('categories','news.cate_id=categories.id')->select('news.id,title,content,news.createdate,description,image,categories.category_name')->get();
        return $data;
    }
    
    public function getNewsTopBig(){
        $data= $this->db->table('news')->join('categories','news.cate_id=categories.id')->where('category_name','=',"Hot")->select('news.id,title,content,news.createdate,description,image,categories.category_name')->orderBy('id','DESC')->limit(1)->get();
        return $data;
    }

    public function getNewsByCategoryName($categoryname,$limit){
        $data= $this->db->table('news')->join('categories','news.cate_id=categories.id')->where('category_name','=',$categoryname)->select('news.id,title,content,news.createdate,description,image,categories.category_name')->orderBy('id','DESC')->limit($limit)->get();
        return $data;
    }

    public function getNewsByChildCategory($categoryid,$limit){
        $data= $this->db->table('news')->join('categories','news.cate_id=categories.id')->whereIn('cate_id','IN',$categoryid)->select('news.id,title,content,news.createdate,description,image,categories.category_name')->orderBy('createdate','DESC')->limit($limit)->get();
        return $data; 
    }

    public function createNews($data){
        $this->db->table('news')->insert($data);
        return $this;
    }

    public function deleteNews($id){
        $this->db->table('news')->where('id','=',$id)->delete();
        return $this;
    }
    
    public function deleteNewsByCategory($cate_id){
        $this->db->table('news')->where('cate_id','=',$cate_id)->delete();
        return $this;
    }

    public function getDetailNews($id){
        $data= $this->db->table('news')->join('categories','news.cate_id=categories.id')->select('news.id,cate_id,title,content,news.createdate,description,image,categories.category_name')->where('news.id','=',$id)->get();
        return $data;
    }

    public function getDetailImage($id){
        $data= $this->db->table('news')->where('id','=',$id)->select('image')->get();
        return $data;
    }

    public function updateNews($data,$id){
        $this->db->table('news')->where('id','=',$id)->update($data); 
        return $this;
    }
}
?>