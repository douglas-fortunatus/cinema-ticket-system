<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/middleware.php");
    include(ROOT_PATH . "/app/helpers/validation.php");

    $table = 'theaters';
    $errors = array();

    $regions = selectAll('region');
    $theaters = joinTheater($table, 'region');

    $id = '';
    $name = '';
    $region_id = '';

    if(isset($_POST['addtheater'])){
        $errors = validateTheater($_POST);

        if(count($errors) === 0){
            unset($_POST['addtheater']);
            $theater_id = create($table, $_POST);
            header('location: ' . BASE_URL . '/admin/theater/index.php');

        }else{
            $name = $_POST['th_name'];
            $region_id = $_POST['region_id'];
        }
    }

    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $theater = selectOne($table, ['id' => $id]);
        $id = $theater['id'];
        $name = $theater['th_name'];
        $region_id = $theater['region_id'];
    }

    if(isset($_POST['updatetheater']))
    {

        $errors = validateTheater($_POST);

        if(count($errors) === 0){

            $id = $_POST['id'];
            unset($_POST['updatetheater'], $_POST['id']);

            $theater_up = update('theaters', $id, $_POST);
            header('location: ' . BASE_URL . '/admin/theater/index.php');
            exit();

        } else {
            $id = $_POST['id'];
            $name = $_POST['th_name'];
            $region_id = $_POST['region_id'];
        }
    }

    if(isset($_GET['del_id']))
    {
        $id = $_GET['del_id'];
        $count = delete($table, $id);
        header('location: ' . BASE_URL . '/admin/theater/index.php');
        exit();
    }