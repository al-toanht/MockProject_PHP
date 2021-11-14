<?php
class NewsController extends Controller {
    private $news;
    private $categories;
    private $data=[];
    public function __construct(){
        $this->news=$this->model('NewsModel');
        $this->categories=$this->model('CategoryModel');
    }

    public function index(){
        $getListNews= $this->news->getListNews();
        $this->data['sub_content']['getListNews']= $getListNews;
        
        $this->data['content']= 'admin/block/news/content';
        $this->view('admin/layouts/admins_layout',$this->data);
    }

    public function storeAdd(){        
        $listcategories= $this->categories->getListCategory();
        $this->data['sub_content']['listcategories']= $listcategories;


        $this->data['content']= 'admin/block/news/addform';
        $this->view('admin/layouts/admins_layout',$this->data);
    }
    
    public function storeUpload(){
        $this->view('admin/ckfinder');
    }

    public function details($id){
        $detailNews= $this->news->getDetailNews($id);
        $this->data['sub_content']['detailNews']=$detailNews;
        
        $this->data['content']= 'admin/block/news/detailform';
        $this->view('admin/layouts/admins_layout',$this->data);
    }
    
    public function addNews(){
        if(isset($_POST['submit'])){
	        $image = $_FILES["HinhAnh"]["name"];
            $filename='';
            $msg='';
            if(!empty($image)) {
                $target = "public/Assets/images/".basename($image);
                if(move_uploaded_file($_FILES['HinhAnh']['tmp_name'], $target)){
                    $filename=basename($image);
                }else {
                    $msg= "Upload file khong thanh cong";
                    App::$app->loadError('uploadfile',['message'=>$msg]);
  	            }
            }
            $dataInsert = [
                'title' =>$_POST['title'],
                'content' => $_POST['content'],
                'cate_id' => $_POST['cate_id'],
                'description' => $_POST['description'],
                'image' => $filename,
            ];
            $this->news->createNews($dataInsert);

            header("location: $this->_WEB_ROOT/admin-news");  
  	    }
    }
    
    public function storeUpdate($id){
        $listcategories= $this->categories->getListCategory();
        $this->data['sub_content']['listcategories']= $listcategories;

        $detailNews= $this->news->getDetailNews($id);
        $this->data['sub_content']['detailNews']= $detailNews;

        $this->data['content']= 'admin/block/news/updateform';

        $this->view('admin/layouts/admins_layout',$this->data);
    }

    public function updateDataNews($id){
        if(isset($_POST['submit'])) {
	        $image = $_FILES["HinhAnh"]["name"];
            if(empty($image)){
                $detailImage= $this->news->getDetailImage($id);
                foreach($detailImage as $key=> $value){
                    $dataUpdate = [
                        'title' =>$_POST['title'],
                        'content' => $_POST['content'],
                        'cate_id' => $_POST['cate_id'],
                        'description' => $_POST['description'],
                        'image' => $value['image'],
                    ];
                }
                $this->news->updateNews($dataUpdate,$id);

                header("location: $this->_WEB_ROOT/admin-news");  
            }else {
                $msg='';
                $target = "public/Assets/images/".basename($image);
                if (move_uploaded_file($_FILES['HinhAnh']['tmp_name'], $target)) {
                    $dataUpdate = [
                        'title' =>$_POST['title'],
                        'content' => $_POST['content'],
                        'cate_id' => $_POST['cate_id'],
                        'description' => $_POST['description'],
                        'image' => basename($image)
                    ];
                    $this->news->updateNews($dataUpdate,$id);
    
                    header("location: $this->_WEB_ROOT/admin-news");  
                  }else{
                    $msg= "Upload file khong thanh cong";
                    App::$app->loadError('uploadfile',['message'=>$msg]);
                }
            }
        }
    }
    
    public function deleteDataNews($id){
        if(isset($_POST['submit'])) {
            $this->news->deleteNews($id);
            
            header("location: $this->_WEB_ROOT/admin-news");  
        }
    }
} 
?>