<?php
class Login 
{
    private $error = " ";
    public function evaluate($data)
    {
        $email =  addslashes($data['email']);
        $password = addslashes($data['password']);

        $query = "select * from users where email='$email' limit 1";

        $DB = new Database();
        $result = $Db->read($query);
        
        if($result){
            

        } 
        return $error;
    }

}