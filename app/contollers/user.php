<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/middleware.php");
    include(ROOT_PATH . "/app/helpers/validateUser.php");

    $errors = array();
    $firstName = '';
    $lastName = '';
    $email = '';
    $password = '';
    $table = 'user';

    function loginUser($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['message'] = "You have logged in";
        $_SESSION['type'] = "success";

        if($_SESSION['role'] == true){
            header('location: ' . BASE_URL . '/admin/schedule/index.php');
        }else{
            header('location: ' . BASE_URL . '/index.php');
        }

        
        exit();
    }

    // registering the user
    if(isset($_POST['signUpbtn'])){

        $errors = validateUser($_POST);

        if(count($errors) === 0){

            $username = array($_POST['first_name'], $_POST['last_name']);
            $_POST['username'] = implode(' ', $username); 
            unset($_POST['first_name'], $_POST['last_name'], $_POST['signUpbtn']);
            $_POST['role'] = 0;
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id '=> $user_id]);
            loginUser($user);

        }else {

            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];   
        }
    }

    // login the user
    if(isset($_POST['signInbtn'])){
        $errors = validateLoginUser($_POST);

        if(count($errors) === 0){
            $user = selectOne($table, ['email' => $_POST['email']]);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                loginUser($user);
            }else {
                array_push($errors, 'Wrong Credentials');
            }
        }

        $email = $_POST['email'];
        $password = $_POST['password']; 
    }

