<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-superGlobals data retrival page</title>
</head>

<body>


    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $age =  $_POST['age'];
    }
    else{
       
    }


    ?>

    <h1>Thank you <?php echo $name ?> for submitting the form</h1>
    <p>Your age is <?php echo $age ?></p>

   <?php 
   
   session_start();

   $_SESSION['name'] = $name;
   
   echo "<h1> $_SESSION[username] </h1>";

   ?>



    <a href="php-superGlobals.php">Go back</a>

</body>

</html>