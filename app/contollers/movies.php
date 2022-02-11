<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/middleware.php");
    include(ROOT_PATH . "/app/helpers/fieldValidation.php");

    $table = 'movies';

    $datas = selectAll($table);

    $errors = array();
    $name = "";
    $description = "";
    $age = "";
    $duration = "";
    $image = "";
    $youtubeLink = ""; 

    if(isset($_POST['addmovie'])){

        $errors = movieValidation($_POST);

        if (!empty($_FILES['image']['name'])) {
            $image_name =  time() . '_' . $_FILES['image']['name'];
            $destination = ROOT_PATH . "/assets/img/poster" . $image_name;

            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if($result ){
                $_POST['image'] = $image_name;
            }else{
                array_push($errors, 'Movie Poster was not uploaded');
            }

        } else {
            array_push($errors, 'Movie Poster required');
        }
        

        if(count($errors) === 0){
            $_POST['duration'] = hoursToMinutes($_POST['duration']);
            unset($_POST['addmovie']);
            $movie_id = create($table, $_POST);
            header('location: ' . BASE_URL . '/admin/movies/index.php');
            
            exit();
        }else{

            $name = $_POST['movie_name'];
            $description = $_POST['description'];
            $age = $_POST['age'];
            $duration = $_POST['duration'];
            $image = $_POST['image'];
            $youtubeLink = $_POST['link'];
        }
        
        
    }

    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $movie = selectOne($table, ['id' => $id]);

        $id = $movie['id'];
        $name = $movie['movie_name'];
        $description = $movie['description'];
        $age = $movie['age'];
        $duration = $movie['duration'];
        $image = $movie['image'];
        $youtubeLink = $movie['link'];
    }

    if(isset($_POST['editmovie'])){

        $errors = movieValidation($_POST);

        if(count($errors) === 0){

            $id = $_POST['id'];
            unset($_POST['editmovie'], $_POST['id']);

            $theater_up = update($table, $id, $_POST);
            header('location: ' . BASE_URL . '/admin/movies/index.php');
            exit();

        } else {
            $id = $_POST['id'];
            $name = $_POST['movie_name'];
            $description = $_POST['description'];
            $age = $_POST['age'];
            $duration = $_POST['duration'];
            $image = $_POST['image'];
            $youtubeLink = $_POST['link'];
        }
    }

    if(isset($_GET['del_id'])){
        $id = $_GET['del_id'];
        $count = delete($table, $id);
        header('location: ' . BASE_URL . '/admin/movies/index.php');
        exit();
    }