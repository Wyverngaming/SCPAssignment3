<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="p-3 mb-2 bg-secondary text-white">
    <title>SCP</title>
  </head>
  <body class="container">
      <?php include "connection.php"; ?>
      
      <ul class="nav bg-white">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="create.php" class="nav-link">Create new record</a></li>
          
          <?php foreach($result as $item): ?>
          <li class="nav-item">
              <a href="index.php?scp='<?php echo $item['item']; ?>'" class="nav-link" <?php echo $item['item']; ?></a>
              
          </li>
          
          <?php endforeach; ?>
      </ul>
      <?php
      if(isset($_GET['SCP']))
      {
          $scp = trim($_get['SCP'], "");
          
          $record = $create->query("select * from SCP where item='$scp'") or die
          ($create->error);
          
          $row = $record->fetch_assoc();
          
          $id = $row['ID'];
          $update = 'update.php?update=' . $id;
          $delete= 'connection.php?delete' . $id;
          
          $image = $row['Image'];
          
          if($image === "")
          {
              echo "
              <h1>{$row['Item']}</h1>
              <p>Containment</p>
              <h2>{$row['Containment']}</h2>
              <p>Description</p>
              <h3>{$row['Description']}</h3>
              
              <a href='{$update}' class='btn btn-secondary'>Update</a>
              <a href='{$delete}' class='btn btn-danger'>Delete</a>
              </p> ";
              
          }
          else
      {
          echo "
          <h1>{$row['Item']}</h1>
          <p>Containment</p>
          <h2>{$row['Containment']}</h2>
           <p>Description</p>
          <h2>{$row['Description']}</h2>
          <p><img width='400' height='400' src='{$Image}'></p>
          <a href='{$update}' class='btn btn-secondary'>Update</a>
          <a href='{$delete}' class='btn btn-danger'>Delete</a>
          </p>
      ";
          
      }
      
      }
      else
      {
          echo "
          <h1>Welcome to the SCP files</h1>
          <p>Click on the links to view an SCP subject</p>
          </div>
          ";
      }

      
      
    
    ?>
    
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