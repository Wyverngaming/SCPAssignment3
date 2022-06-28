<?php

//database credentials
$user = "a30048345_User";
$pw = "Toiohomai1234";
$db = "a30048345_SCP";

//database connection
$connection = new mysqli('localhost', $user, $pw, $db);

//variable that returns all records in database 

$result = $connection->query("select * from SCP");

if(isset($_POST['create']))
{
    $item = $_POST['Item'];
    $containment = $_POST['Containment'];
    $description = $_POST['Description'];
    $image = $_POST['Image'];
    
    $insert = "insert into SCP(Item, Containment, Description, Image) values('$item', '$containment', '$description', '$image')";
    
    if($connection->query($insert) === TRUE)
    {
        echo "
        
        <h1> Record added successfully</h1>
        <p><a href='index.php'>Back to Index page</a></p>";
    }
    else
    {
        echo "
        <h1> unable to submit record </h1>
        <p>{$connection->error()}</p>
        <p><a href='index.php'>Back to Index page</a></p>";
    }
}





//check if update form has been posted

if(isset($_POST['update']))
{
    
    //create variables from our post data
    $id = mysqli_real_escape_string($_POST['ID']);
    $item = mysqli_real_escape_string($_POST['Item']);
    $containment = mysqli_real_escape_string($_POST['Containment']);
    $description = mysqli_real_escape_string($_POST['Description']);
    $image = mysqli_real_escape_string($_POST['Image']);
    
    //create a sql update command 
    $update = "update SCP number='$item', Containment='$containment', 
    Description='$description', Image='$image' 
    where id='$ID' ";
    
    if($connection->query($update) === TRUE)
    {
        echo "<h1> record updated succesfully </h1>
        <p><a href='index.php> Return to index page </a></p>
        ";
    }
    else
    {
        echo "
        <h1>Error updating data</h1> 
        <p>{$connection->error}</p>
        <p><a href='index.php'> Return to form</a></p>
        ";   
    }
    
}




//delete record

if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    
    //delete sql command
    $delete = "delete from SCP where id=$ID";
    
    if($connection->query($del) === TRUE)
    {
        echo " <style>
        body{font-family: sans-serif}
        a{background-color: black;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block
            font-size: 16px
        <h1>Record deleted</h1>
        <p><a href='index.php'>back to index page</a></p>
        </style>
        ";
        }
       
    }
    else
    {
        echo "<style>
        body{font-family: sans-serif}
        a{background-color: darkred;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block
            font-size: 16px};
            <h1>Unable to delete record</h1>
            <p>{$update->error()}</p>
            <p><a href=='index.php'> back to index page</a></p>";
    }


?>