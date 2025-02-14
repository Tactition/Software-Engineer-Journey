<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ajax practical</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>

    <h1 class="text-center">PHP ajax practical to check user in database</h1>
    <!-- DATA will go from this page to 1-result.php and there that data will be checked to see if user exists or not and this page will show the result BY GETTING THAT PAGE RESULT AS RESPONSE AND SHOWING IT HERE -->

    <form id="myForm" class="container mt-5 p-5">
        <input type="email" id="email" placeholder="emial"> <span id="email-find"></span>
        <br>
        <br>
        <input type="password" placeholder="password"  id="password" > <br> <br>
        
        <input type="submit" class="btn btn-primary ">

        <br>
        <span id="notice"></span>
    </form>



    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script>
        $("document").ready(function() {
            $("form").submit(function(event) {
                event.preventDefault();

                var type = "POST";

                if (type == "GET") {

                    $.ajax({
                        type: "GET",
                        url: "1-result.php?email=" + btoa( $("#email").val() ) + " ",
                        success: function(response) {
                            var data = response;

                            document.getElementById("notice").innerHTML = data;

                        }
                    });

                } else if (type == "POST") {

                    $.ajax({
                        type: "POST",
                        url: "1-result.php",
                        data: {
                            email: $("#email").val(),
                            password : $("#password").val()
                        },

                        success: function(response) {
                            var data = response;

                            if(data == "user already exists"){
                                var res1 = document.getElementById("email-find")
                                res1.innerHTML="alread exists"
                            }
                            else if(data == "login successfull"){
                                var res2 = document.getElementById("notice")
                                res2.innerHTML="Login successfull"
                            }
                            else{
                                document.getElementById('notice').innerHTML="Login failed"
                            }

                        },
                        error: function() {
                            alert("Error");
                        }


                    })
                }


            })
        });
    </script>

</body>

</html>