<?php

    function screenValidation($screen){

        $errors = array();

        if(empty($screen['screen_name'])){
            array_push($errors, 'Screen name is required');
        }

        if(empty($screen['theater_id'])){
            array_push($errors, 'Theater allocation is required');
        }

        return $errors;
    }

    function movieValidation($movie){
        $errors = array();

        if(empty($movie['movie_name'])){
            array_push($errors, 'Movie name is required');
        }

        if(empty($movie['description'])){
            array_push($errors, 'description is required');
        }

        if(empty($movie['age'])){
            array_push($errors, 'Age rating is required');
        }

        if(empty($movie['duration'])){
            array_push($errors, 'Duration is required');
        }

        if(empty($movie['link'])){
            array_push($errors, 'Youtube link is required');
        }

        return $errors;
    }