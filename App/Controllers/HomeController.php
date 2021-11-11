<?php
class HomeController extends Controller{
    private $categories;
    private $news;
    public function __construct(){
        $this->categories=$this->model('CategoryModel');
        $this->news=$this->model('NewsModel');
    }
    public function index(){
        $listCategoriesParent= $this->categories->getListParentCategory();
        $this->data['content']['listCategoriesParent']= $listCategoriesParent;
        
        $newsTopBig= $this->getNewsByParentCategoryName('World',1);
        $this->data['content']['newsTopBig']= $newsTopBig;
        
        $newsTopSmallAbove= $this->getNewsByParentCategoryName("Star",2);
        $this->data['content']['newsTopSmallAbove']= $newsTopSmallAbove;
        
        $newsTopSmallBelow= $this->getNewsByParentCategoryName("Music",2);
        $this->data['content']['newsTopSmallBelow']= $newsTopSmallBelow;

        $listNewsStar= $this->getNewsByParentCategoryName("Star",2);
        $this->data['content']['listNewsStar']= $listNewsStar;
        
        $listNewsCine= $this->getNewsByParentCategoryName("Cine",4);
        $this->data['content']['listNewsCine']= $listNewsCine;
        
        $listNewsSport= $this->getNewsByParentCategoryName("Sport",3);
        $this->data['content']['listNewsSport']= $listNewsSport;

        $listNewsSchool= $this->getNewsByParentCategoryName("School",4);
        $this->data['content']['listNewsSchool']= $listNewsSchool;

        $listNewsMusic= $this->getNewsByParentCategoryName("Music",4);
        $this->data['content']['listNewsMusic']= $listNewsMusic;

        $listLastNews= $this->news->getListLastNews(3);
        $this->data['content']['listLastNews']= $listLastNews;

        $listNewsWorld= $this->getNewsByParentCategoryName("World",4);
        $this->data['content']['listNewsWorld']= $listNewsWorld;
        
        $ListCategory = $this->categories->getListCategory();
        $this->data['content']['ListCategory']= $ListCategory;

        $this->data['link']= "user/block/content";
        $this->view('user/layouts/users_layout',$this->data);
    }

    public function detailNews($id){
        $listCategoriesParent= $this->categories->getListParentCategory();
        $this->data['content']['listCategoriesParent']= $listCategoriesParent;
        
        $detailsnews=$this->news->getDetailNews($id);
        $this->data['content']['detailsnews']= $detailsnews;

        $ListCategory = $this->categories->getListCategory();
        $this->data['content']['ListCategory']= $ListCategory;
        
        $this->data['link']="user/block/contentDetail";
        $this->view('user/layouts/users_layout',$this->data);
    }
    
    public function showNewsParentCategory($categoryid){
        $listCategoriesParent= $this->categories->getListParentCategory();
        $this->data['content']['listCategoriesParent']= $listCategoriesParent;

        $listNewsByCategory= $this->getNewsByParentCategoryID($categoryid,10);
        $this->data['content']['listNewsByCategory']= $listNewsByCategory;
        
        $detailsCategory= $this->categories->getDetailCategory($categoryid);
        $this->data['content']['detailsCategory']= $detailsCategory;

        $ListCategory = $this->categories->getListCategory();
        $this->data['content']['ListCategory']= $ListCategory;

        $this->data['link']="user/block/detailCategories";
        $this->view('user/layouts/users_layout',$this->data);
    }
    
    public function showNewsChildCategory($categoryid){
        $listCategoriesParent= $this->categories->getListParentCategory();
        $this->data['content']['listCategoriesParent']= $listCategoriesParent;

    
        $listNewsByCategory= $this->news->getNewsByCategoryID($categoryid,10);
        $this->data['content']['listNewsByCategory']= $listNewsByCategory;
        
        $detailsCategory= $this->categories->getDetailCategory($categoryid);
        $this->data['content']['detailsCategory']= $detailsCategory;

        $ListCategory = $this->categories->getListCategory();
        $this->data['content']['ListCategory']= $ListCategory;

        $this->data['link']="user/block/detailCategories";
        $this->view('user/layouts/users_layout',$this->data);
    }
    
    public function getNewsByParentCategoryName($categoryname,$limit){
        $arrChildCategory=[];
        //get ChildCategory ID By name of parent category
        $ChildCategory= $this->categories->getChildIDCateByParentName($categoryname);
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
    
    public function getNewsByParentCategoryID($categoryid,$limit){
        $arrChildCategory=[];
        //get ChildCategory ID By ID of parent category
        $ChildCategory= $this->categories->getChildIDCateByParentID($categoryid);
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