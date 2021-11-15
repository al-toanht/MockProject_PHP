<?php
 class AdminModel extends Model {
    function tableFill(){
        return 'admins';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    public function getAdmin($username,$password){
        $data=$this->db->table('admins')->where('username','=',$username)->getObject();
        if ($data) {
        $hashedPassword = $data->password;
        if (password_verify($password, $hashedPassword)) {
            return $data;
        } else {
            return false;
        }
    }
    }
    
    public function updatePassword($data,$id){
        $this->db->table('admins')->where('id','=',$id)->update($data); 
        return $this;
    }
   
}
?>