<?php
class AdminController extends Controller {
    private $admin;
    private $data=[];
    public function __construct(){
        $this->admin=$this->model('AdminModel');
    }
    public function login(){
        if ($_SERVER['REQUEST_METHOD'] =='POST') {
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data = [
                'username' =>trim($_POST['username']),
                'password' =>trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Only contain letters and numbers';
            }

            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }  elseif (!preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password is in correct. Please try again';
            }

            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->admin->getAdmin($data['username'],$data['password']);
                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or username is in correct. Please try again';
                    $this->data = $data;
                    $this->view('admin/Login',$this->data);
                }
            }
        } else {
            $data=[
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => '',
            ];
        }
        $this->data = $data;
        $this->view('admin/Login',$this->data);
    }
    public function changePassword(){
        $this->data['link'] = 'admin/block/account/formChangePass';
        if ($_SERVER['REQUEST_METHOD'] =='POST') {
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $passwordValidation = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
            
            $data = [
                'username' => $_SESSION['username'],
                'password' =>trim($_POST['current_password']),
                'currentPasswordError' => '',
                'newPasswordError' => '',
            ];
            $dataUpdate = [
                'password' =>trim($_POST['new_password']),
            ];
            
            if (empty($data['password'])) {
                $data['currentPasswordError'] = 'Please enter a Current Password.';
            } elseif (strlen($data['password']) <8) {
                $data['currentPasswordError'] = 'Password must be at least 8 character';
            } elseif (!preg_match($passwordValidation, $data['password'])) {
                $data['currentPasswordError'] = 'at least one uppercase letter, one lowercase letter <br> one number and one special character';
            }

            if (empty($dataUpdate['password'])) {
                $data['newPasswordError'] = 'Please enter a New Password.';
            } elseif (strlen($dataUpdate['password']) <8) {
                $data['newPasswordError'] = 'Password must be at least 8 character';
            } elseif (!preg_match($passwordValidation, $dataUpdate['password'])) {
                $data['newPasswordError'] = 'at least one uppercase letter, one lowercase letter <br> one number and one special character';
            }
            
            if (empty($data['currentPasswordError']) && empty($data['newPasswordError'])) {
                $loggedInUser = $this->admin->getAdmin($data['username'],$data['password']);
                if ($loggedInUser) {
                    $dataUpdate['password'] = password_hash($dataUpdate['password'], PASSWORD_BCRYPT);
                    $newPasswordUser = $this->admin->updatePassword($dataUpdate,$_SESSION['user_id']);
                    header("location: $this->_WEB_ROOT/admin-category");  
                } else {
                    $data['currentPasswordError'] = 'Current Password  is in correct. Please try again';
                    $this->data['content'] = $data;
                    $this->view('admin/layouts/admins_layout',$this->data);
                }
            }
        } else {
            $data = [
                'username' => '',
                'password' => '',
                'currentPasswordError' => '',
                'newPasswordError' => '',
            ];
        }
        $this->data['content'] = $data;
        $this->view('admin/layouts/admins_layout',$this->data);
    }
    public function storeForm(){
        $this->data['link'] = 'admin/block/account/formChangePass';
        $this->data['content'] = [];
        
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