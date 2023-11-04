<?php
    include "connection.php";
    $id = $_GET['editId'];
    $tittle = $_GET['editTittle'];
    $author = $_GET['editAuthor'];
    $description = $_GET['editDescription'];
    $connect -> query("UPDATE library SET author='$author', tittle='$tittle', description='$description' WHERE id = '$id'");
    header('Location: ../index.php');
?>