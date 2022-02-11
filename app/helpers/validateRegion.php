<?php

    function validateRegion($region)
    {
        $errors = array();

        if(empty($region['region_name']))
        {
            array_push( $errors, 'Region name is required');
        }

        $existingRegion = selectOne('region', ['region_name' => $region['region_name']]);

        if (isset($existingRegion)) {
            array_push($errors, 'Region name already exists');
        }

        return $errors;
    }
