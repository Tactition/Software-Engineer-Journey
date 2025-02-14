<?php


$db = new mysqli("localhost", "root", "", "wap");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


$username = mysqli_real_escape_string($db, $_POST["email"]);
$password = mysqli_real_escape_string($db, $_POST["password"]);

$cmd = $db->prepare("SELECT pass FROM test_login WHERE user=?");

// $cmd = $db->prepare("UPDATE test_login set pass=? WHERE user=? "); this is if we wanna set new pass word 



$result =  $cmd->bind_param("s", $username);  // add the password here so that you will be able to set the pass

$result = $cmd->execute();

$cmd->store_result();

if ($result) {  // add the effedcted row method here 
    echo "login success  <br>";

    $cmd->bind_result($psw);
    $cmd->fetch();

    echo "Your password is " . $psw;

} else {
    echo "password is incorrect";
}
