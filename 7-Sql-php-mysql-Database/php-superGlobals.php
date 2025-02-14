<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-superGlobals</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            margin: 20px 0;
        }

        input[type="text"] {
            margin: 5px 0;
            padding: 8px;
            width: 200px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }

        h1 {
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>

<body>
    <caption>Php Super Globals Introduction</caption>

    <form action="php-superGlobals.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="age" placeholder="Enter your age">
        <input type="submit" value="Submit">
    </form>
    
    
    
    <p>Your PHP version is:<?php echo phpversion(); ?></p>
    <code>
        <pre>
        if (mkdir("test"))
            echo "Directory created";
        else

            rmdir("test");
        echo "Directory not created";
        ?>

        scandir("test");

        </pre>
    </code>

    <p>mkdir and rmdir : are used to create and delete directory in the server And Scan is used to get all the file names of dirctory</p>

    <?php 

        $array = scandir("c:/");

        $length = sizeof($array);

        for($i=0; $i<$length; $i++){
            echo $array[$i]."<br>";
        }
    ?>
   

    <ul>
        <li> <code>$_SERVER['PHP_SELF']</code>: It is used to get the current file name or path</li>
        <h4> <?php echo $_SERVER['PHP_SELF'] ?> </h4>

        <li> <code>$_SERVER['REQUEST_METHOD']</code>: It is used to get the request method of the page.by which form is submitted</li>
        <h4> <?php echo $_SERVER['REQUEST_METHOD'] ?> </h4>

        <li>  </li>
    </ul>


</body>

</html>