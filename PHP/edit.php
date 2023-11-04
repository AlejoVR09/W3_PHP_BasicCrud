<?php
    include "connection.php";
    $id = $_GET['id'];
    $tittle = $_GET['tittle'];
    $author = $_GET['author'];
    $description = $_GET['description'];
    $connect -> query("UPDATE library SET author='$author', tittle='$tittle', description='$description' WHERE id = '$id'");
    echo $_REQUEST['editAuthor'];
    //header('Location: ../index.php');
?>