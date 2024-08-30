<?php
class SignUp
{
    private $error = "";

    public function evaluate($data) {
        foreach ($data as $key => $value ) {
            if(empty($value))
            {
                //the below is $error = $error . "";
                $this->error = $this->error . $key . "is empty!<br>";
            } 
        }
        if ($this->error == "") {
            //no error
            $this->create_user($data);
        }else {
            return $this->error;
        }
    }
    public function create_user($data) {
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $gender = $data['gender'];
        $email = $data['email'];
        $password = $data['password'];

        //create this automatically
        $url_address = strtoLower($first_name) . "." . strtoLower($last_name);
        $userid= $this->create_userid();
        
        $query = "insert into 
        users(userid, first_name, last_name, gender, email, password, url_address) 
        values
        ('$userid', '$first_name', '$last_name', '$gender', '$email', '$password','$url_address')";

        $Db = new Database();
        $Db->save($query);
    }
    private function create_userid(){
        $length = rand(4,19);
        $number = "";
        for ($i=0; $i < $length; $i++){
            $new_rand = rand(0,9);
            $number = $number . $new_rand;
        }
        return $number;
    }
}