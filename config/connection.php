<?php

    session_start();

    // LOCAL CONNECTION

    // $db_user = "root";
    // $db_pass = "";
    // $db_name = "warsha_shop";
    // $db_host = "localhost";
    
   
    // $con = new mysqli($db_host,$db_user,$db_pass,$db_name);


    // HEROKU

    $db_user = "b1ccf8cb2ba2ed";
    $db_pass = "64d7bb8b";
    $db_name = "heroku_f35d69e42e8fd60";
    $db_host = "us-cdbr-east-02.cleardb.com";

    $con = new mysqli($db_host,$db_user,$db_pass,$db_name);

   
  
    /* check connection */
    if ($con->connect_errno) {
        printf("Connect failed: %s\n", $con->connect_error);
        exit();
    }
        /* check if server is alive */
    if ($con->ping()) {
        //printf ("Our connection is ok!\n");
    } else {
        printf ("Error: %s\n", $con->error);
    }

?>