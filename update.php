<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create new SCP record</title>
  </head>
  <body class="container">
    <h1>Update SCP Record</h1>
    
    
    <?php
    
    include "connection.php";
    
    $id = $_GET['update'];
    $record = $connection->query("select * from truck where id=$id");
    $row = $record->fetch_assoc();
    
    
    ?>
    
    <p><a href="index.php" class="btn btn-danger">Back to index page</a></p>
    
    <form method="post" action="connection.php" class="form-group">
        <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
        <label>SCP item:</label>
        <br>
        <input type="text" class="form-control" name="item" value="<?php echo $row['Item']; ?>">
        <br>
        <label>Containment:</label>
        <br>
        <textarea class="form-control" name="Containment" rows="5"><?php echo $row['containment']; ?></textarea>
        <br>
         <label>Descrption:</label>
        <br>
        <textarea class="form-control" name="Description" rows="5"><?php echo $row['Description']; ?></textarea>
        <br>
        <label>SCP Image (optional)</label>
        <br>
        <input type="text" name="Image" class="form-control" value="<?php echo $row ['Image']; ?>">
        <br>
        <input type="submit" class="btn btn-primary" name="update" value="Update SCP record"
        
        </form
        
        <div class="my-3">
        <a href="index.php" class="btn btn-danger">Back to index page</a>
        </div>
        
        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>