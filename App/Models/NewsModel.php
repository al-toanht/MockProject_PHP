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
        $data= $this->db->table('news')->select()->get();
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

    public function getDetailNews($id){
        $data= $this->db->table('news')->where('id','=',$id)->get();
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