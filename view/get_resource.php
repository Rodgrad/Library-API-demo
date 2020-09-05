<?php
header("Access-Control-Allow-Origin: *");

require('../config/connect.config.db.php');

use ApiServer\ConnectDatabase;

class RequestClass extends ConnectDatabase{


    function checkAPI($api){
        $link = $this->connect();
        $sql = "SELECT * FROM APIKEYS WHERE api_key='$api'";
        if ($res = mysqli_query($link, $sql)){
            $row = mysqli_fetch_assoc($res);
            if($row['api_key'] == $api){   
                mysqli_close($link);             
                    return true;
            }
            
        }else{
            
            return false;
        }

    }


    function trackCall($api){

        $CALL = 0;
        $link = $this->connect();
        $sql = "SELECT * FROM APIKEYS WHERE api_key='$api'";
        if ($res = mysqli_query($link, $sql)){
            $row = mysqli_fetch_assoc($res);
            $CALL = $row['calls'];
        }
        if($CALL > 10){
            echo "Your limmit on this API calls have been reached. Create new api"; 
            exit();
        }
        $incCalls = $CALL + 1;

        $sql = "UPDATE `APIKEYS` SET `calls`='$incCalls' WHERE api_key='$api'";
        mysqli_query($link, $sql);
        mysqli_close($link);
    }





    function searchBook($keynote, $api){

        $this->trackCall($api);
        $key =  rawurldecode(trim($keynote));
        $link = $this->connect();
        $results = array();
        $sql = "SELECT * FROM books WHERE title LIKE '%$keynote%' OR author LIKE '%$keynote%' ORDER BY title";
        if ($res = mysqli_query($link, $sql)){
            if (mysqli_num_rows($res) > 0){
                while($row = mysqli_fetch_array($res)){
                    $results[] = $row;
                }
                mysqli_close($link);
                echo json_encode($results);
                exit();
            }
            
        }else{
            
            mysqli_close($link);
            $results = array('status'=>'error');
            echo (json_encode($results));
            exit();

        }

    }
}


    if (isset($_GET['search']) && isset($_SERVER['HTTP_APIKEY']) ){
        
        $getBook = new RequestClass();

        if(!( $getBook->checkAPI($_SERVER['HTTP_APIKEY'])) ){
            echo "API is not valid.";
            exit();
        }else if($getBook->checkAPI($_SERVER['HTTP_APIKEY']) ){
            $getBook->searchBook($_GET['search'], $_SERVER['HTTP_APIKEY']);
            
        }
    }else if(!isset($_SERVER['HTTP_APIKEY'])){
        echo "Search or API are not valid.";
        header("Location: ../index.php?status=error&error=api");
        exit();
    }




    



?>



