<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $userpass = $_POST['password'];
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $email = base64_decode($_GET['email']); // bse 64 decode is used to decode the email address encoded in base 64 or btao
} else {

    echo "Unsupported request method.";

}

$server = "localhost";
$user = "root";
$password = "";

$db = new mysqli($server, $user, $password, "wap");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} else {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $pass_check = "SELECT * FROM users where username= '$email' ";
        $check_response = $db->query($pass_check);

        // if($check_response -> num_rows == 1){
        //     echo "user already exists";
        // }
        // else{ 

        $checkuser = " SELECT * FROM users where username = '$email' AND password = '$userpass' ";

        $response = $db->query($checkuser);

        if ($response->num_rows == 1) {
            
            echo "login successfull";

        } else {
            echo "login failed";
        }
    // }

    } 
    else {
        $check_user = "SELECT username FROM users where username = '$email' ";

        $response =  $db->query($check_user);

        if ($response->num_rows == 1) {
            echo "User already exists";
        } else {
            echo "User does not exist ";
        }
    }
}
