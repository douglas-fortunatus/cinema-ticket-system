<?php

    include('config.php');

    include(ROOT_PATH . "/app/contollers/user.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cinema &mdash; Login</title>

    <!-- meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

    <div class="container" id="container">

        <!-- register section -->
        <div class="form-container sign-up-container">
            <form action="access.php" method="post" class="access-form">
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <h3 style="padding-top: 15px"> Create Account</h3>

                <div class="field-box">
                    <input type="text" name="first_name" value ="<?php echo $firstName ?>" placeholder="First Name" />
                </div>

                <div class="field-box">
                    <input type="text" name="last_name" value ="<?php echo $lastName ?>" placeholder="Last Name" />
                </div>

                <div class="field-box">
                    <input type="email" name="email" value ="<?php echo $email ?>" placeholder="Email" />
                </div>

                <div class="field-box">
                    <input type="password" name="password" value ="<?php echo $password ?>" placeholder="Password" />
                </div>
                
                <button style="margin-top:10px" type="submit" name="signUpbtn"> Create Account</button>

                <h5 class="mb-2">Already have an account! <a class="ghost" id="signIn">Sign In</a></h5>

                <p class="credit"><a href="<?php echo BASE_URL . '/index.php'?>" target="_blank">Movie Point</a></p>
            </form>
        </div>
        <!-- end register section -->

        <!-- login section -->
        <div class="form-container sign-in-container">

            <form action="access.php" method="post" class="access-form">
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <h3 style="padding-bottom: 15px"> Login Now</h3>

                <div class="field-box">
                    <input type="email" name="email" value ="<?php echo $email ?>" placeholder="Email" />
                </div>

                <div class="field-box">
                <input type="password" name="password" value ="<?php echo $password ?>" placeholder="Password" />
                </div>

                <button type="submit" name="signInbtn" style="margin-top: 10px"> Login</button>

                <h5 class="mb-2">New to here! <a class="ghost" id="signUp">Sign Up</a></h5>

                <p class="credit"><a href="<?php echo BASE_URL . '/index.php'?>" target="_blank">Movie Point</a></p>
            </form>
            
        </div>
        <!-- end login section -->

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="assets/img/poster/poster01.jpg" alt="movie-1"/>
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="assets/img/poster/poster08.jpeg" alt="movie-2"/>
                </div>
            </div>
        </div>
        
    </div>
    
    <!-- js -->
    <script src="assets/vendor/jQuery/jquery-3.6.0.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script>
        const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });
            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });
    </script>
</body>
</html>