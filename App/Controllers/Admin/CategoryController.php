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
        $listcategories = $this->categories->getListCategoryASC();
        $this->data['content']['listcategories'] = $listcategories;

        $this->data['link'] = 'admin/block/category/content';
    
        $this->view('admin/layouts/admins_layout',$this->data);
    }

   
    public function addCategory(){
        $categoriesParent = $this->categories->getCategoryParent();
        $this->data['content']['categoriesParent'] = $categoriesParent;
        
        $this->data['link'] = 'admin/block/category/addform';

        $dataInsert = [
            'category_name' => '',
            'parent_id' => ''
        ];
        
        if (isset($_POST['submit'])) {
            $message= "";
            $dataInsert = [
                'category_name' => $_POST['category_name'],
                'parent_id' => $_POST['parent_category']
            ];
            if ($this->categories->findCategoryByName($_POST['category_name'])) {
                $message = "Category Name Đã Tồn Tại";
                
                $this->data['content']['message']=$message;
            } else {
                $this->categories->createCategory($dataInsert);

                header("location: $this->_WEB_ROOT/admin-category");  
            }
        }
        $this->data['content']['dataInsert'] = $dataInsert;
        
        $this->view('admin/layouts/admins_layout',$this->data);

    }
    
    public function updateCate($id){
        $listcategories = $this->categories->getListnotCategory($id);
        $this->data['content']['listcategories'] = $listcategories;

        $detailCategory= $this->categories->getDetailCategory($id);
        $this->data['content']['detailCategory'] = $detailCategory;

        $this->data['link'] = "admin/block/category/updateform";
        if (isset($_POST['submit'])) {
            $message = "";
            $dataUpdate = [
                'category_name' =>$_POST['category_name'],
                'parent_id' => $_POST['parent_category']
            ];
            if ($this->categories->findCategoryByNameToUpdate(($_POST['category_name']),$id)) {
                $message = "Category Name Đã Tồn Tại";
                
                $this->data['content']['message']=$message;
            } else {
                $dataUpdate = [
                    'category_name' =>$_POST['category_name'],
                    'parent_id' => $_POST['parent_category']
                ];
                $this->categories->updateCategory($dataUpdate,$id);

                header("location: $this->_WEB_ROOT/admin-category");
            }
        }
        $this->view('admin/layouts/admins_layout',$this->data);
    }
    
    public function deleteCate($id){
        if (isset($_POST['submit'])) {
            $ChildCategory = $this->categories->getChildIDCateByParentID($id);
            
            if ($ChildCategory) {
                $arrChildCategory = [];
                array_push($arrChildCategory,$id);
                foreach($ChildCategory as $key=>$value){
                    array_push($arrChildCategory,$value['id']);
                }
                $strChildCategory = implode(",",$arrChildCategory);
                $strChildCategory = rtrim($strChildCategory,"/");

                $this->news->deleteAllNewsInChildCategory($strChildCategory);
                
                $this->categories->deleteAllChildCategory($strChildCategory);
            } else {
                $this->categories->deleteCategory($id);
            
                $this->news->deleteNewsByCategory($id);
            }
            
            header("location: $this->_WEB_ROOT/admin-category");
        }
    }
} 
?>