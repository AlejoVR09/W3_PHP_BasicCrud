<?php
    include "connection.php";
    $id = $_GET['id'];

    $connect->query("DELETE FROM library WHERE id='$id'");
    header("Location: ../index.php");
    //echo "<center><h1>'$id'</h1></center>";

?>