<?php
class AdminController extends Controller {
    private $admin;
    private $data=[];
    public function __construct(){
        $this->admin=$this->model('AdminModel');
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD'] =='POST') {
            $_POST= filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data=[
                'username' =>trim($_POST['username']),
                'password' =>trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            if(empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }
            if(empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }
            if(empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->admin->getAdmin($data['username'],$data['password']);
                if($loggedInUser){
                    $this->createUserSession($loggedInUser);
                }else{
                    $data['passwordError'] = 'Password or username is in correct. Please try again';
                    $this->data= $data;
                    $this->view('admin/Login',$this->data);
                }
            }
        }else {
            $data=[
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => '',
            ];
        }
        $this->data= $data;
        $this->view('admin/Login',$this->data);
    }
    public function changePassword(){
        $this->data['content']= 'admin/block/account/formChangePass';
        if($_SERVER['REQUEST_METHOD'] =='POST'){
            $_POST= filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data = [
                'username' => $_SESSION['username'],
                'password' =>trim($_POST['current_password']),
                'currentPasswordError' => '',
                'newPasswordError' => '',
            ];
            $dataUpdate = [
                'password' =>trim($_POST['new_password']),
            ];
            if(empty($data['password'])) {
                $data['currentPasswordError'] = 'Please enter a Current Password.';
            }
            if(empty($dataUpdate['password'])) {
                $data['newPasswordError'] = 'Please enter a New Password.';
            }
            if(empty($data['currentPasswordError']) && empty($data['newPasswordError'])) {
                $loggedInUser = $this->admin->getAdmin($data['username'],$data['password']);
                if($loggedInUser) {
                    $dataUpdate['password'] = password_hash($dataUpdate['password'], PASSWORD_BCRYPT);
                    $newPasswordUser= $this->admin->updatePassword($dataUpdate,$_SESSION['user_id']);
                    header("location: $this->_WEB_ROOT/admin-category");  
                }else {
                    $data['currentPasswordError'] = 'Current Password  is in correct. Please try again';
                    $this->data['sub_content']= $data;
                    $this->view('admin/layouts/admins_layout',$this->data);
                }
            }
        }else {
            $data = [
                'username' => '',
                'password' => '',
                'currentPasswordError' => '',
                'newPasswordError' => '',
            ];
        }
        $this->data['sub_content']= $data;
        $this->view('admin/layouts/admins_layout',$this->data);
    }
    public function storeForm(){
        $this->data['content']= 'admin/block/account/formChangePass';
        $this->data['sub_content']= [];
        
        $this->view('admin/layouts/admins_layout',$this->data);
    }
    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        header("location: $this->_WEB_ROOT/admin-category");  
    }
    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        header("location: $this->_WEB_ROOT/login");  
    }
  
} 
?>