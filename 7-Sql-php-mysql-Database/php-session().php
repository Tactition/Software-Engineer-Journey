<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-session</title>
</head>
<body>
    <p>php session are used to send data from one page to another page ...  </p>

    <form action="thankyou.php" method="post">
        <button type="submit">submit</button>
    </form>

    <?php  
    
        session_start();
        $_SESSION['username'] = "zahid nazir";

    ?>
    
</body>
</html>