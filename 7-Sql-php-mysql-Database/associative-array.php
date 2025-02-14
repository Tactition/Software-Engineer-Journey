<?php

$server = "localhost";
$username = "root";
$password = "";

$response;

$db = new mysqli($server, $username, $password, "wap");

if ($db->connect_error) {
    echo "connection to database failed";
} else {

    $show_data = "SELECT * FROM users";

    $response = $db->query($show_data);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <table border="1" width="80%" align="center">
        <tr>
            <th>id</th>
            <th>fullname</th>
            <th>email / username</th>
            <th>password</th>
        </tr>

        <?php
        
        while($data= $response->fetch_assoc()){

            echo "
            <tr>
                <td> ". $data['id'] ."  </td>
                <td> ". $data['fullname']." </td>
                <td> ". $data['username']." </td>
                <td> ". $data['password']." </td>
            <tr>
            ";

        }
        ?>
    </table>

</body>
</html>