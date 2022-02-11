<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/middleware.php");
    include(ROOT_PATH . "/app/helpers/fieldValidation.php");

    $table = 'screens';
    $errors = array();

    $theaters = selectAll('theaters');
    $screens = joinScreen($table, 'theaters');

    $id = '';
    $name = '';
    $theater_id = '';

    if(isset($_POST['addScreen'])){
        
        $errors = screenValidation($_POST);

        if(count($errors) === 0){

            unset($_POST['addScreen']);
            // dd($_POST);
            $screen_id = create($table, $_POST);

            header('location: ' . BASE_URL . '/admin/halls/index.php');

        }else{
            $name = $_POST['screen_name'];
            $theater_id = $_POST['theater_id'];
        }
    }

    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $screen = selectOne($table, ['id' => $id]);
        $id = $screen['id'];
        $name = $screen['screen_name'];
        $theater_id = $screen['theater_id'];
    }

    if(isset($_POST['updateScreen'])){

        $errors = validateScreen($_POST);

        if(count($errors) === 0){

            $id = $_POST['id'];
            unset($_POST['updateScreen'], $_POST['id']);
            $theater_up = update($table, $id, $_POST);
            header('location: ' . BASE_URL . '/admin/halls/index.php');
            exit();

        } else {
            $id = $_POST['id'];
            $name = $_POST['screen_name'];
            $theater_id = $_POST['theater_id'];
        }
    }

    if(isset($_GET['del_id'])){
        $id = $_GET['del_id'];
        $count = delete($table, $id);
        header('location: ' . BASE_URL . '/admin/halls/index.php');
        exit();
    }