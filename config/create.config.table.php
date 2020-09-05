<?php

    require('connect.config.db.php');

    use ApiServer\ConnectDatabase;


    class Table extends ConnectDatabase{

        function __construct(){

            $link = $this->connect();
            $sql = "CREATE TABLE books( id bigint AUTO_INCREMENT PRIMARY KEY NOT NULL,
            title TEXT NOT NULL , author TEXT, rating float , isbn   TEXT, isbn13 TEXT , lang VARCHAR(20), num_pages int,
            ratings_count int, rating_text int, pub_date VARCHAR(20),  publisher TEXT)";

                try{

                    if(mysqli_query($link, $sql)){
                        echo "Success";
                    }
                }catch(Exception $error){
                    echo "Failed";

                }
          $sql = "CREATE TABLE APIKEYS( id bigint AUTO_INCREMENT PRIMARY KEY NOT NULL,
          api_key LONGTEXT NOT NULL , email TEXT, calls bigint)";

              try{
                  if(mysqli_query($link, $sql)){
                    echo "Success";
                  }
              }catch(Exception $error){

              echo "Failed";
            }
      }

    }


    $table = new Table();

?>
