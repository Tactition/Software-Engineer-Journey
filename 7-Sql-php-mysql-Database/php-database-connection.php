<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <!-- // this file is linked with login.php and signup.php -->

    <div class="container mt-5 border p-2 bg-light">
        <h4 class="text-center">Login System</h4>
        <div class="row">

            <div class="col-md-6">
                <ul class="nav nav-tabs active" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active " id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <div class="col-md-12">
                            <h2>Login</h2>

                            <!-- login form -->

                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label for="loginEmail">Email address</label>
                                    <input type="email" class="form-control" id="loginEmail" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="loginPassword">Password</label>
                                    <input type="password" class="form-control" id="loginPassword" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <div class="col-md-12">
                            <h2>Sign Up</h2>

                            <!-- sign up form -->

                            <form action="signup.php" method="post">
                                <div class="form-group">
                                    <label for="signupUsername">Username</label>
                                    <input type="text" class="form-control" id="signupUsername" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="signupEmail">Email address</label>
                                    <input type="email" class="form-control" id="signupEmail" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="signupPassword">Password</label>
                                    <input type="password" class="form-control" id="signupPassword" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <p name="notice">Total no of users: </p>
            </div>
        </div>
    </div>




    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>