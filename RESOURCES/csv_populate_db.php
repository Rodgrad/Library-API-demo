<?php
    require('../config/connect.config.db.php');

    use ApiServer\ConnectDatabase;


    $conn = new ConnectDatabase();
    $link = $conn->connect();

    
    $file = fopen('books.csv', 'r') or die("Failed to open a file.");
    $csvData = array();
    while (($data = fgetcsv($file, 1000, ","))   !== FALSE) {
       $csvData[]= $data;
    }
        fclose($file);

    

        $sql = "INSERT INTO books(title, author, rating, isbn, isbn13, lang, num_pages, ratings_count, rating_text, pub_date, publisher) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $link->prepare($sql);
        echo "Inserting against database. \r\n ";
        for($i=0; $i< count($csvData); $i++){
                $stmt->bind_param('sssssssssss', $csvData[$i][1], $csvData[$i][2], $csvData[$i][3], $csvData[$i][4], $csvData[$i][5], $csvData[$i][6], $csvData[$i][7],$csvData[$i][8], $csvData[$i][9], $csvData[$i][10], $csvData[$i][11]);
                $stmt->execute();
        }
        echo "Done, inserted: " . $i . " rows";

?>