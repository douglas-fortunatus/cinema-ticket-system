<?php

    // Screen validation
    function validateScreen($screen){
        $errors = array();

        if(empty($screen['screen_name'])){
            array_push( $errors, 'Screen name is required');
        }

        if(empty($screen['theater_id'])){
            array_push( $errors, 'You have to select theater');
        }

        $existingScreen = selectValidation('screens', 'screen_name', ['theater_id' => $screen['theater_id']]);

        if (isset($existingScreen)) {
            array_push($errors, 'Screen name in this theater already exists');
        }

        return $errors;
    }