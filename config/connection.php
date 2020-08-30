<?php

    session_start();

    // LOCAL CONNECTION

    $db_user = "root";
    $db_pass = "";
    $db_name = "warsha_shop";
    $db_host = "localhost";
    
   
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