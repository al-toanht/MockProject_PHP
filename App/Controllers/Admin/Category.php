<?php
class Category extends Controller {
    private $categories;
    public function __construct(){
        $this->categories=$this->model('CategoryModel');
    }
    public function index(){
       $data=$this->categories->getListCategory();
       print_r($data);
        
    }
   
} 
?>