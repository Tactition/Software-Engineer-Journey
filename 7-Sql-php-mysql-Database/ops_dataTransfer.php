<?php

class db
{
    private $db;

    //student varible
    private $name;
    private $age;
    private $dob;

    //techer varibales 
    private $subject;
    private $salery;

    private $query;
    private $response;

    function database()
    {
        $this->db = new mysqli("localhost", "root", "", "wap");

        if ($this->db->connect_error) {
            die('database not found');
        }
    }

    function insert_student($name, $age, $dob)
    {

        $this->database();
        
        $this->name = $name;
        $this->age = $age;
        $this->dob = $dob;

        $this->query = "INSERT INTO students(name,age,dob) VALUES('$this->name','$this->age','$this->dob')";

        $this->response = $this->db->query($this->query);

        if ($this->response) {
            echo 'student successfully added';
        }
    }

    function insert_faculty($name, $age, $dob, $subject, $salery)
    {
        $this->database();
        $this->name = $name;
        $this->age = $age;
        $this->dob = $dob;
        $this->subject = $subject;
        $this->salery = $salery;


        $this->query = "INSERT INTO students(name,age,dob,grade) VALUES('$this->name','$this->age','$this->dob','$this->subject.$this->salery')";

        $this->response = $this->db->query($this->query);

        if ($this->response) {
            echo 'Teacher successfully added';
        }
    }
}


class common_code
{
    private $common_data = [];
    function set()
    {

        $this->common_data[0] = $_REQUEST['name'];
        $this->common_data[1] = $_REQUEST['age'];
        $this->common_data[2] = $_REQUEST['dob'];

        return $this->common_data;
    }
}

class student extends common_code {}


class faculty extends common_code
{
    private $other_data = [];
    function setdata()
    {
        $this->other_data[0] = $_REQUEST['f-subject'];
        $this->other_data[1] = $_REQUEST['f-salery'];

        return $this->other_data;
    }
}


class main
{
    function result()
    {
        if (isset($_REQUEST['s-submit'])) {

            $student = new student;
            $student_data = $student->set();

            $db = new db();
            $db->insert_student($student_data[0], $student_data[1], $student_data[2]);
        } else if (isset($_REQUEST['f-submit'])) {
            $faculty = new faculty;
            $faculty_data = $faculty->set();
            $other_data = $faculty->setdata();

            $db = new db();
            $db->insert_faculty($faculty_data[0], $faculty_data[1], $faculty_data[2], $other_data[0], $other_data[1]);
        }
    }
}



$object = new main();
$object->result();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data Store using oops</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>

    <section class="main">
        <div class="container">
            <div class="row">
                <!-- student form -->
                <div class="col-md-6">
                    <div class="container bg-light">
                        <form action="ops_dataTransfer.php" method="post" class="p-4 mt-2">

                            <div class="form-group">
                                <label for="name">Name of student</label>
                                <input type="text" name="name" class="form-control" placeholder="Student name">
                            </div>

                            <div class="form-group">
                                <label for="name">Age of student</label>
                                <input type="text" name="age" class="form-control" placeholder="Student age">
                            </div>

                            <div class="form-group">
                                <label for="name">Dob</label>
                                <input type="text" name="dob" class="form-control" placeholder="Student dob">
                            </div>

                            <input type="submit" value="submit" name="s-submit" class="btn btn-primary">

                        </form>
                    </div>
                </div>
                <!-- teacher form -->
                <div class="col-md-6">
                    <div class="container bg-light">
                        <form action="ops_dataTransfer.php" method="post" class="p-4 mt-2">

                            <div class="form-group">
                                <label for="name">Name of facality</label>
                                <input type="text" name="name" class="form-control" placeholder="facality name">
                            </div>

                            <div class="form-group">
                                <label for="name">Age of facality</label>
                                <input type="text" name="age" class="form-control" placeholder="facality age">
                            </div>

                            <div class="form-group">
                                <label for="name">Dob</label>
                                <input type="text" name="dob" class="form-control" placeholder="facality dob">
                            </div>

                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" name="f-subject" class="form-control" placeholder="facality sub">
                            </div>
                            <div class="form-group">
                                <label for="name">Salery</label>
                                <input type="text" name="f-salery" class="form-control" placeholder="facality salery">
                            </div>

                            <input type="submit" value="submit" name="f-submit" class="btn btn-primary">

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>

</html>