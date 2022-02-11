<?php

    function errorShow()
    {
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );
    }

    errorShow();

    // Define DB Params
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "cinemas");

    // Define URL
    define("ROOT_PATH", realpath(dirname(__FILE__)));
    define("BASE_URL", "http://localhost/projects/movie");

    // var_dump(ROOT_PATH);