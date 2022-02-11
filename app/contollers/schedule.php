<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/middleware.php");

    $table = "schedular";

    $movies = selectAll('movies');
    $STH = selectAll('screens');
    $screens = joinScreen('screens', 'theaters');
    $datas = a();

    if(isset($_POST['addSl'])){

        $duration = selectValidation('movies', 'duration', [ 'id' => $_POST['movie_id']]);

        $_POST['endtime'] = $duration;
        
        $_POST['end_time'] = endTime($_POST['start_time'], $_POST['endtime']['duration']);

        if( $_POST['quality'] == '3D'){
            $_POST['price'] = 12000;
        }else{
            $_POST['price'] = 10000;
        }

        unset($_POST['endtime'], $_POST['addSl']);

        $schedular_id = create($table, $_POST);

        header('location: ' . BASE_URL . '/admin/schedule/index.php');

    }