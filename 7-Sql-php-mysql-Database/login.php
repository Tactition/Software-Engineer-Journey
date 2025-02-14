<?php

$server = "localhost";
$username = "root";
$password = "";


$db = new mysqli($server, $username, $password, "wap");

if ($db->connect_error) {
    die("Connection failed:" . $db->connect_error);
} else {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['email'];
        $password = $_POST['password'];

        $check_user = "SELECT username FROM users where username ='$username' AND password = '$password'";
        $respone =  $db->query($check_user);

        if ($respone->num_rows == 1) {
            echo "Login successful";
        } else {
            echo "Login failed";
        }
    }
}
