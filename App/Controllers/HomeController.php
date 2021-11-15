<?php
class HomeController extends Controller{
    private $categories;
    private $news;
    public function __construct(){
        $this->categories=$this->model('CategoryModel');
        $this->news=$this->model('NewsModel');
    }
    public function index(){
        $listCategoriesParent = $this->categories->getListParentCategory();
        $this->data['content']['listCategoriesParent'] = $listCategoriesParent;
        
        $newsTopBig = $this->news->getNewsByParentCategoryName('World',1);
        $this->data['content']['newsTopBig'] = $newsTopBig;
        
        $newsTopSmallAbove = $this->news->getNewsByParentCategoryName("Star",2);
        $this->data['content']['newsTopSmallAbove'] = $newsTopSmallAbove;
        
        $newsTopSmallBelow = $this->news->getNewsByParentCategoryName("Music",2);
        $this->data['content']['newsTopSmallBelow'] = $newsTopSmallBelow;

        $listNewsStar = $this->news->getNewsByParentCategoryName("Star",2);
        $this->data['content']['listNewsStar'] = $listNewsStar;
        
        $listNewsCine = $this->news->getNewsByParentCategoryName("Cine",4);
        $this->data['content']['listNewsCine'] = $listNewsCine;
        
        $listNewsSport = $this->news->getNewsByParentCategoryName("Sport",3);
        $this->data['content']['listNewsSport'] = $listNewsSport;

        $listNewsSchool = $this->news->getNewsByParentCategoryName("School",4);
        $this->data['content']['listNewsSchool'] = $listNewsSchool;

        $listNewsMusic = $this->news->getNewsByParentCategoryName("Music",4);
        $this->data['content']['listNewsMusic'] = $listNewsMusic;

        $listLastNews = $this->news->getListLastNews(3);
        $this->data['content']['listLastNews'] = $listLastNews;

        $listNewsWorld = $this->news->getNewsByParentCategoryName("World",4);
        $this->data['content']['listNewsWorld'] = $listNewsWorld;
        
  
        $this->data['link'] = "user/block/content";
        $this->view('user/layouts/users_layout',$this->data);
    }

    public function detailNews($id){
        $detailsnews = $this->news->getDetailNews($id);
        $this->data['content']['detailsnews'] = $detailsnews;

        
        $this->data['link'] = "user/block/contentDetail";
        $this->view('user/layouts/users_layout',$this->data);
    }
    
    public function showNewsParentCategory($categoryid){
        $listNewsByCategory = $this->news->getNewsByParentCategoryID($categoryid,10);
        $this->data['content']['listNewsByCategory'] = $listNewsByCategory;
        
        $detailsCategory = $this->categories->getDetailCategory($categoryid);
        $this->data['content']['detailsCategory'] = $detailsCategory;


        $this->data['link'] = "user/block/detailCategories";
        $this->view('user/layouts/users_layout',$this->data);
    }
    
    public function showNewsChildCategory($categoryid){
        $listNewsByCategory = $this->news->getNewsByCategoryID($categoryid,10);
        $this->data['content']['listNewsByCategory'] = $listNewsByCategory;
        
        $detailsCategory = $this->categories->getDetailCategory($categoryid);
        $this->data['content']['detailsCategory'] = $detailsCategory;

        $this->data['link'] = "user/block/detailCategories";
        $this->view('user/layouts/users_layout',$this->data);
    }
}
?>