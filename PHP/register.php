<?php
    //comentarios 
    /* comentario de 
       varias lineas
    $edad = 22;
    print("Hola!");
    echo "<h1>Mundo </h1>".$edad;
    echo "Hola '$edad' <br>";
    echo 'tengo "$edad"';
    echo "tengo {$edad} años";*/

    //recibir los datos
    // include 'connection.php';
    // $correo = $_POST['correo'];
    // $password = $_REQUEST['password'];
    // $claveHash = password_hash($password,PASSWORD_BCRYPT);

    // $send = $connect->prepare("INSERT INTO usuarios VALUES (null, ? , ? )");

    // $send->bindParam(1,$correo);
    // $send->bindParam(2,$claveHash);

    // $send->execute();

    /*$conectar->query("INSERT INTO usuarios VALUES (null,
    '$correo','$claveHash')");*/

    /* $sql = "INSERT INTO usuarios VALUES (null,'$correo',
    '$claveHash')";*/

    //$conectar->query($sql);

    //echo "Correo: {$correo} <br> Contra: {$password}";
    

    include 'connection.php';
    $author = $_POST['author'];
    $tittle = $_POST['tittle'];
    $description = $_POST['description'];

    $send = $connect->prepare("INSERT INTO library VALUES (null, ? , ?, ?)");

    $send->bindParam(1, $author);
    $send->bindParam(2, $tittle);
    $send->bindParam(3, $description);

    $send->execute();
    header('Location: ../index.php')//es para enrutar 
?>