<?php

$username = "root";
$server = "localhost";
$password = "";

$db = new mysqli($server, $username, $password, "wap");

if ($db->connect_error) {
    echo "Connection failed: ";
} else {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];



        $check_user = "SELECT username FROM users where username='$email'";
        $result = $db->query($check_user);


        if ($result->num_rows == 0) {

            $insert_user = "INSERT INTO users (fullname,username,password,reg_date) VALUES('$username','$email','$password',now())";
            $db->query($insert_user);
            echo "User created successfully";
        } else {

            echo "User already exists";
        }
    }



    $getusers = "SELECT * FROM users";
    $result = $db->query($getusers);
    $notice = $result->num_rows;
}
