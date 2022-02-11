<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/middleware.php");

    $schedule = a();
    $sliders = todayPost();

    //dd($schedule);

    if(isset($_GET['id'])){
            
        $id = $_GET['id'];
        $movie = selectOne('movies', ['id' => $id]);
        $id = $movie['id'];
        $name = $movie['movie_name'];
        $description = $movie['description'];
        $age = $movie['age'];
        $duration = $movie ['duration'];
        $link = $movie['link'];

    }
