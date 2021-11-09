<?php
class AuthMiddleware extends Middlewares{
    public function handle(){
        if(!isLoggedIn()){
            header("location: $this->_WEB_ROOT/login");  
        }
    }
} 
?>