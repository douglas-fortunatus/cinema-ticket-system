<?php

    // theater Validation
    function validateTheater($theater){
        $errors = array();

        if(empty($theater['th_name'])){
            array_push( $errors, 'Theater name is required');
        }

        if(empty($theater['region_id'])){
            array_push( $errors, 'You have to select region');
        }

        $existingTheater = selectValidation('theaters', 'th_name', ['region_id' => $theater['region_id']]);

        if (isset($existingTheater)) {
            array_push($errors, 'Theater name in this region already exists');
        }

        return $errors;
    }

