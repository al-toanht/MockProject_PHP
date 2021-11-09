<?php
class Home extends Controller{
    private $categories;
    private $news;
    public function __construct(){
        $this->categories=$this->model('CategoryModel');
        $this->news=$this->model('NewsModel');
    }
    public function index(){
        $listCategoriesParent= $this->categories->getListParentCategory();
        $this->data['sub_content']['listCategoriesParent']= $listCategoriesParent;
        
        $newsTopBig= $this->news->getNewsTopBig();
        $this->data['sub_content']['newsTopBig']= $newsTopBig;
        
        $newsTopSmallAbove= $this->news->getNewsByCategoryName("Star",2);
        $this->data['sub_content']['newsTopSmallAbove']= $newsTopSmallAbove;
        
        $newsTopSmallBelow= $this->news->getNewsByCategoryName("Music",2);
        $this->data['sub_content']['newsTopSmallBelow']= $newsTopSmallBelow;

        $listNewsStar=$this->getNewsByParentCategory("Star",2);
        $this->data['sub_content']['listNewsStar']= $listNewsStar;
        
        $listNewsCine=$this->getNewsByParentCategory("Cine",4);
        $this->data['sub_content']['listNewsCine']= $listNewsCine;
        
        $this->data['content']= "user/block/content";
        $this->view('user/layouts/users_layout',$this->data);
    }

    public function details($id){
        $listCategoriesParent= $this->categories->getListParentCategory();
        $this->data['sub_content']['listCategoriesParent']= $listCategoriesParent;
        
        $detailsnews=$this->news->getDetailNews($id);
        $this->data['sub_content']['detailsnews']= $detailsnews;
        
        $this->data['content']="user/block/contentDetail";
        $this->view('user/layouts/users_layout',$this->data);
    }
    
    public function getNewsByParentCategory($categoryname,$limit){
        $arrChildCategory=[];
        //get ChildCategory ID By name of parent category
        $ChildCategory= $this->categories->getChildIDCategory($categoryname);
        foreach($ChildCategory as $key=>$value){
            array_push($arrChildCategory,$value['id']);
        }
        //Xử lí array chứa id ChildCategory thành string 
        $strChildCategory= implode(",",$arrChildCategory);
        $strChildCategory= rtrim($strChildCategory,"/");

        //Lấy ra tin tức mới nhất nằm trong tất cả các Child ID category  
        $newsChildCategory = $this->news->getNewsByChildCategory($strChildCategory,$limit);
        return $newsChildCategory;
    }
} 
?>