<?php

class db
{
    private $db;

    function database()
    {
        $this->db = new mysqli("localhost", "root", "", "wap");
        
        if (!$this->db->connect_error) {
            return $this->db;
            // this will return db object
        }
    }
}

class main
{

    private $username;
    private $password;

    private $db;

    function run()
    {
        $this->db = new db();
        $this->db = $this->db->database();

        $this->username = mysqli_real_escape_string($this->db, $_POST["email"]);
        $this->password = mysqli_real_escape_string($this->db, $_POST["password"]);

        $object = new checkuser;
        $object->userExistance($this->username, $this->password);
    }
}

class checkuser
{
    private $username;
    private $password;

    private $db;
    private $query;
    private $response;

    function userExistance($user, $pass)
    {
        $this->username =  $user;
        $this->password = $pass;

        $this->db = new db(); // we will get db object from here returne by db class
        $this->db = $this->db->database();

        $this->query = $this->db->prepare("SELECT * FROM users WHERE username=?");

        $this->query->bind_param('s', $this->username);

        $this->query->execute();

        $this->response = $this->query->get_result();


        if ($this->response->num_rows == 1) {

            $data = $this->response->fetch_assoc();

            if ($data["password"] == $this->password) {
                echo "login success";
            } else {
                echo "password is incorrect";
            }
        } else {
            echo "user not found";
        }
    }
}



$loginObject = new main();

if (isset($_REQUEST['submit'])) {
    $loginObject = new main();
    $loginObject->run();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 600px;">
            <div class="card-body">
                <!-- <h5 class="card-title text-center mb-4">Login</h5> -->
                <form action="oop-login.php" method="post">
                    <!-- <form action="oop-login-manage.php" method="post"> -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>