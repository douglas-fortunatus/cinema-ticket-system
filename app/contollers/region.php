<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/middleware.php");
    include(ROOT_PATH . "/app/helpers/validateRegion.php");


    $region_table = 'region';

    $errors = array();

    $id = '';
    $name = '';

    $regions = selectAll($region_table);

    if(isset($_POST['addregion']))
    {
        $errors = validateRegion($_POST);

        if(count($errors) === 0){
            unset($_POST['addregion']);
            $region_id = create($region_table, $_POST);
            header('location: ' . BASE_URL . '/admin/region/index.php');
            exit();
        } else {
            $name = $_POST['region_name'];
        }
    }

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $region = selectOne($region_table, ['id' => $id]);
        $id = $region['id'];
        $name = $region['region_name'];
    }

    if(isset($_GET['del_id']))
    {
        $id = $_GET['del_id'];
        $count = delete($region_table, $id);
        header('location: ' . BASE_URL . '/admin/region/index.php');
        exit();
    }

    if(isset($_POST['updateregion']))
    {
        $errors = validateRegion($_POST);

        if(count($errors) === 0){
            $id = $_POST['id'];
            unset($_POST['updateregion'], $_POST['id']);
            $region_id = update($region_table, $id, $_POST);
            header('location: ' . BASE_URL . '/admin/region/index.php');
            exit();
        } else {
            $id = $_POST['id'];
            $name = $_POST['region_name'];
        }
    }
