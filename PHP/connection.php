<?php
    $server = 'localhost';
    $DB = 'library';
    $user = 'root';
    $password = '';
    try {
        $connect =  new PDO("mysql: server=$server;
        dbname=$DB", $user, $password);
        //echo "Connection succesful to '$DB";
    } catch (PDOException $e) {
       echo $e->getMessage();
    }
?>