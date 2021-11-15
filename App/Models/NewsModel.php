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
        $data= $this->db->table('news')->join('categories','news.cate_id=categories.id')->select('news.id,title,content,news.createdate,description,image,categories.category_name')->orderBy('createdate','DESC')->get();
        return $data;
    }
    
    public function getListLastNews($limit){
        $data= $this->db->table('news')->join('categories','news.cate_id=categories.id')->select('news.id,title,content,news.createdate,description,image,categories.category_name')->limit($limit)->orderBy('createdate','DESC')->get();
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
    
    public function getNewsByCategoryID($categoryid,$limit){
        $data = $this->db->table('news')->join('categories','news.cate_id=categories.id')->where('cate_id','=',$categoryid)->select('news.id,title,content,news.createdate,description,image,categories.category_name')->orderBy('createdate','DESC')->limit($limit)->get();
        return $data;
    }

    public function createNews($data){
        $this->db->table('news')->insert($data);
        return $this;
    }

    public function findNewsByTitle($title){
        $data = $this->db->table('news')->where('title','=',$title)->select()->get();
        return $data;
    }

    public function findNewsByTitleToUpdate($title,$id){
        $data = $this->db->table('news')->where('title','=',$title)->where('id','!=',$id)->select()->get();
        return $data;
    }

    public function getNewsByParentCategoryName($categoryname,$limit){
        $arrChildCategory = [];
        
        //get ChildCategory ID By name of parent category
        $ChildCategory = $this->db->table('categories c, categories p')->whereJoin('p.id','=','c.parent_id')->where('p.category_name','=',$categoryname)->select('c.id')->get();
        if ($ChildCategory) {
            foreach($ChildCategory as $key=>$value){
                array_push($arrChildCategory,$value['id']);
            }
                //Xử lí array chứa id ChildCategory thành string 
                $strChildCategory = implode(",",$arrChildCategory);
                $strChildCategory = rtrim($strChildCategory,"/");

                //Lấy ra tin tức mới nhất nằm trong tất cả các Child ID category  
                $newsChildCategory = $this->db->table('news')->join('categories','news.cate_id=categories.id')->whereIn('cate_id','IN',$strChildCategory)->select('news.id,title,content,news.createdate,description,image,categories.category_name')->orderBy('createdate','DESC')->limit($limit)->get();
                return $newsChildCategory;
        } else {
            return false;
        }
        
    }
    
    public function getNewsByParentCategoryID($categoryid,$limit){
        $arrChildCategory = [];

        array_push($arrChildCategory,$categoryid);
        //get ChildCategory ID By ID of parent category
        $ChildCategory = $this->db->table('categories c, categories p')->whereJoin('p.id','=','c.parent_id')->where('p.id','=',$categoryid)->select('c.id')->get();
        if ($ChildCategory) {
            foreach($ChildCategory as $key=>$value){
                array_push($arrChildCategory,$value['id']);
            }
            //Xử lí array chứa id ChildCategory thành string 
            $strChildCategory = implode(",",$arrChildCategory);
            $strChildCategory = rtrim($strChildCategory,"/");

            //Lấy ra tin tức mới nhất nằm trong tất cả các Child ID category  
            $newsChildCategory = $this->db->table('news')->join('categories','news.cate_id=categories.id')->whereIn('cate_id','IN',$strChildCategory)->select('news.id,title,content,news.createdate,description,image,categories.category_name')->orderBy('createdate','DESC')->limit($limit)->get();
            return $newsChildCategory;
        } else {
            return false;
        }
    }


    public function deleteNews($id){
        $this->db->table('news')->where('id','=',$id)->delete();
        return $this;
    }
    
    public function deleteNewsByCategory($cate_id){
        $this->db->table('news')->where('cate_id','=',$cate_id)->delete();
        return $this;
    }
    public function deleteAllNewsInChildCategory($cate_id){
        $this->db->table('news')->whereIn('cate_id','IN',$cate_id)->delete();
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