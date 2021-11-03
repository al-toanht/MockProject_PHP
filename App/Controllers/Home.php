<?php
class Home extends Controller{
    private $categories;
    public function __construct(){
        $this->categories=$this->model('CategoryModel');
    }
    public function index(){
        $listcategories= $this->categories->getListCategory();
        $this->data['sub_content']['listcategories']= $listcategories;
        $this->view('user/layouts/users_layout',$this->data);
    }
} 
?>