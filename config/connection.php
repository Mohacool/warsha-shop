<?php

    session_start();

    // LOCAL CONNECTION

    // $db_user = "root";
    // $db_pass = "";
    // $db_name = "warsha_shop";
    // $db_host = "localhost";
    
   
    // $con = new mysqli($db_host,$db_user,$db_pass,$db_name);

    //CLEAR DB CONNECTION

    //Get Heroku ClearDB connection information
    $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server   = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db       = substr($cleardb_url["path"],1);


    $active_group = 'default';
    $query_builder = TRUE;

    $con['default'] = array(
        'dsn'    => '',
        'hostname' => $cleardb_server,
        'username' => $cleardb_username,
        'password' => $cleardb_password,
        'database' => $cleardb_db,
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
    );
  
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