<?php
class CategoryController extends Controller {
    private $categories;
    private $news;
    private $data=[];
    public function __construct(){
        $this->categories=$this->model('CategoryModel');
        $this->news=$this->model('NewsModel');
    }

    public function index(){
        $listcategories= $this->categories->getListCategoryASC();
        $this->data['sub_content']['listcategories']= $listcategories;

        $this->data['content']= 'admin/block/category/content';
    
        $this->view('admin/layouts/admins_layout',$this->data);
    }

    public function storeAdd(){
        $categoriesParent= $this->categories->getCategoryParent();
        $this->data['sub_content']['categoriesParent']= $categoriesParent;

        $this->data['content']= 'admin/block/category/addform';

        $this->view('admin/layouts/admins_layout',$this->data);
    }

    public function addCategory(){
        if(isset($_POST['submit'])){
            $dataInsert=[
                'category_name' =>$_POST['category_name'],
                'parent_id' => $_POST['parent_category']
            ];
            $this->categories->createCategory($dataInsert);

            header("location: $this->_WEB_ROOT/admin-category");  
        }
    }

    public function storeUpdate($id){
        $listcategories= $this->categories->getListnotCategory($id);
        $this->data['sub_content']['listcategories']= $listcategories;

        $detailCategory= $this->categories->getDetailCategory($id);
        $this->data['sub_content']['detailCategory']= $detailCategory;

        $this->data['content']= 'admin/block/category/updateform';

        $this->view('admin/layouts/admins_layout',$this->data);
    }
    
    public function updateCate($id){
        if(isset($_POST['submit'])){
            $dataUpdate=[
                'category_name' =>$_POST['category_name'],
                'parent_id' => $_POST['parent_category']
            ];
            $this->categories->updateCategory($dataUpdate,$id);

            header("location: $this->_WEB_ROOT/admin-category");
        }
    }
    
    public function deleteCate($id){
        if(isset($_POST['submit'])) {
            $this->categories->deleteCategory($id);
            $this->news->deleteNewsByCategory($id);
            
            header("location: $this->_WEB_ROOT/admin-category");
        }
    }
} 
?>