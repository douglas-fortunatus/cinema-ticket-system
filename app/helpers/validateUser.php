<?php

    function validateUser($user)
    {
        $errors = array();

        if(empty($user['first_name']))
        {
            array_push( $errors, 'First name required');
        }

        if(empty($user['last_name']))
        {
            array_push( $errors, 'Last name required');
        }

        if(empty($user['email']))
        {
            array_push( $errors, 'Email is required');
        }

        if(empty($user['password']))
        {
            array_push( $errors, 'Password is required');
        }

        $existingUser = selectOne('user', ['email' => $user['email']]);

        if (isset($existingUser)) {
            array_push($errors, 'Email Already exist');
        }

        return $errors;
    }

    function validateLoginUser($user)
    {
        $errors = array();

        if(empty($user['email']))
        {
            array_push( $errors, 'Email is required');
        }

        if(empty($user['password']))
        {
            array_push( $errors, 'Password is required');
        }

        return $errors;
    }