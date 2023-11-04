<?php
    include "connection.php"
    $id = $_GET['id'];
    $element = $connect -> query("SELECT * FROM library WHERE id = '$id");

    echo "<center><h1>'$id'</h1></center>";

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
                        <?php
                            echo $element["author"];
                        ?>
                    </input>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Tittle</label>
                    <input type="text" class="form-control" name="tittle">
                        <?php
                            echo $element["tittle"];
                        ?>
                    </input>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Description</label>
                    <input type="text" class="form-control" name="description">
                        <?php
                            echo $element["description"];
                        ?>
                    </input>
                </div>
                <button type="submit" class="btn btn-outline-primary">Send</button>
                </form>
            </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
<?php
    header('Location: ../index.php');
?>