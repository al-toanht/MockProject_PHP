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
        $this->data['content']['getListNews'] = $getListNews;
        
        $this->data['link'] = 'admin/block/news/content';
        $this->view('admin/layouts/admins_layout',$this->data);
    }
    
    public function storeUpload(){
        $this->view('admin/ckfinder');
    }

    public function details($id){
        $detailNews= $this->news->getDetailNews($id);
        $this->data['content']['detailNews'] = $detailNews;
        
        $this->data['link'] = 'admin/block/news/detailform';
        $this->view('admin/layouts/admins_layout',$this->data);
    }
    
    public function addNews(){
        $dataInsert = [
            'title' => '',
            'content' => '',
            'cate_id' => '',
            'description' => '',
            'image' => '',
        ];
        $this->data['link'] = 'admin/block/news/addform';    

        if (isset($_POST['submit'])) {
            $message = "";
            $nameImage = "";
	        $image = $_FILES["HinhAnh"]["name"];
            $dataInsert = [
                'title' => trim($_POST['title']),
                'content' => $_POST['content'],
                'cate_id' => $_POST['cate_id'],
                'description' => $_POST['description'],
                'image' => '',
            ];
            if ($this->news->findNewsByTitle(trim($_POST['title']))) {
                $message = "Title Đã Tồn Tại";
               
                $this->data['content']['message'] = $message;
            } else {
                if (!empty($image)) {
                    $nameImage = uploadImage($image);
                    if ($nameImage==false) {
                        $message = "Upload File Không Thành Công";
                        App::$app->loadError('uploadfile',['message'=>$message]);
                    } else {
                        $dataInsert['image'] = $nameImage;
                        $insert = $this->news->createNews($dataInsert);
                
                        if ($insert) {
                            header("location: $this->_WEB_ROOT/admin-news");  
                        }
                    }
                } else {
                    $insert = $this->news->createNews($dataInsert);
                    if ($insert) {
                        header("location: $this->_WEB_ROOT/admin-news");  
                    }
                }
            }
  	    }
        $this->data['content']['dataInsert'] = $dataInsert;
        $this->view('admin/layouts/admins_layout',$this->data);
    }
    
    public function updateDataNews($id){
        $detailNews = $this->news->getDetailNews($id);
        $this->data['content']['detailNews'] = $detailNews;

        $this->data['link'] = 'admin/block/news/updateform';
        if (isset($_POST['submit'])) {
            $message= "";
            $dataUpdate = [
                'title' => trim($_POST['title']),
                'content' => $_POST['content'],
                'cate_id' => $_POST['cate_id'],
                'description' => $_POST['description'],
                'image' => '',
            ];
	        $image = $_FILES["HinhAnh"]["name"];
            if ($this->news->findNewsByTitleToUpdate(trim($_POST['title']),$id)) {
                $message = "Title  Đã Tồn Tại";

                $this->data['content']['message'] = $message;
            } else {
                if (empty($image)) {
                    $detailImage = $this->news->getDetailImage($id);
                    foreach($detailImage as $key=> $value){
                        $dataUpdate['image'] = $value['image'];
                    }
                    $this->news->updateNews($dataUpdate,$id);

                    header("location: $this->_WEB_ROOT/admin-news");  
                } else {
                    $nameImage = uploadImage($image);
                    if ($nameImage==false) {
                        $message = "Upload File Không Thành Công";
                        App::$app->loadError('uploadfile',['message'=>$message]);
                    } else {
                        $dataUpdate['image'] = $nameImage;
                        $update = $this->news->updateNews($dataUpdate,$id);
                
                        if ($update) {
                            header("location: $this->_WEB_ROOT/admin-news");  
                        }
                    }
                }
            }
        }
        $this->view('admin/layouts/admins_layout',$this->data);
    }
    
    public function deleteDataNews($id){
        if (isset($_POST['submit'])) {
            $this->news->deleteNews($id);
            
            header("location: $this->_WEB_ROOT/admin-news");
        }
    }
} 
?>