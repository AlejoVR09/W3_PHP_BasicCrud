<?php
    include "PHP/connection.php";
    
    $datos = $connect->query("SELECT * FROM library");
    /*
    while($dato = $sql->fetch()){
        echo $dato['correo']. " ".$dato
        ['password']."<br>";
    }*/

    /*foreach($datos as $i)
    echo $i['correo']. "" .$i['password']."<br>";*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="row vh-100 justify-content-center " >
  <div class="col-auto p-5 border">
      <h1>Formulario Web ll</h1>
      <form action="./PHP/register.php" method="POST" >
          <div class="mb-3">
            <label  class="form-label">Author name</label>
            <input type="text" class="form-control" name="author">
          </div>
          <div class="mb-3">
            <label  class="form-label">Tittle</label>
            <input type="text" class="form-control" name="tittle">
          </div>
          <div class="mb-3">
            <label  class="form-label">Description</label>
            <input type="text" class="form-control" name="description">
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    <div class="container p-5">
        <h1 class="text-white text-center">Datos</h1>
        <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Author</th>
      <th scope="col">Tittle</th>
      <th scope="col">Description</th>
      <th scope="col" colspan="2">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $i){ ?>
    <tr>
      <th scope="row"><?php echo $i['id'];?> </th>
      <td><input type="text" value="<?php $author = $i['author']; echo $author;?>" name='editAuthor'></td>
      <td><input type="text" value="<?php $tittle = $i['tittle']; echo $tittle;?>"></td>
      <td><input type="text" value="<?php $description = $i['description']; echo $description;?>"></td>
      <td><a class="btn btn-primary" href="PHP/edit.php?id=<?php echo $i['id'];?>&author=<?php echo $author;?>&tittle=<?php echo $tittle;?>&description=<?php echo $description;?>" class="btn btn-primary">Edit</a></td>
      <td><a class="btn btn-danger" href="PHP/delete.php?id=<?php echo $i['id'];?>" class="btn btn-danger">Delete</a></td>
    <?php } ?> 
    </tr>
  </tbody>
</table>
    </div>
   <script src="js/bootstrap.js"></script>
</body>
</html>