<?php

header("Access-Control-Allow-Origin: *");


require('connect.config.db.php');

use ApiServer\ConnectDatabase;


class APICreate extends ConnectDatabase{

    function create($email){
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email is in wrong format";
            exit();
        }

        $key = bin2hex(uniqid(openssl_random_pseudo_bytes(20)));
        

        $link = $this->connect();

        $sql = "INSERT INTO APIKEYS (api_key, email, calls) VALUES ('$key', '$email', 0)";
        if(mysqli_query($link, $sql)){
            mysqli_close($link);
            echo $key;
            exit();
        }else{
            mysqli_close($link);
            echo "Failed to create API key, try again.";
            exit();
        }

    }
}


if(isset($_POST['email']) && isset($_POST['origin'])){
    $email = array('email'=>$_POST['email']);
    $crt = new APICreate();
    $crt->create($email['email']);
}else{
    echo "Enter email and try again.";
    exit();
}




?>