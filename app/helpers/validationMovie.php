<?php

    function validateMovie($movie){
        $errors = array();

        if(empty($movie['movie_name'])){
            array_push( $errors, 'Movie name is required');
        }

        if(empty($movie['description'])){
            array_push( $errors, 'Movie description is required');
        }

        $existingMovie = selectOne('movies', ['movie_name' => $movie['movie_name']]);

        if (isset($existingMovie)) {
            array_push($errors, 'Movie already exists');
        }

        return $errors;
    }
