<?php

    session_start();

    $is_logged_in= false;
    if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] === true){
    $is_logged_in = true;
    }


    define('DB_PASS', 'password');
    define('DB_NAME', 'gamf');

    function get_connection() {
        return new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8', DB_NAME, DB_PASS);

    }
   
     /*
    CREATE TABLE `gamf`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(200) NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
    */
