<?php
    //var_dump();

    //method GET
    // echo '<pre>';
    // print_r( $_GET );
    // echo '</pre>';

    // echo '<hr>';

    //method POST
    // echo '<pre>';
    // print_r( $_POST );
    // echo '</pre>';

    //method POST hoăc GET
    echo '<hr>';
    echo '<pre>';
    print_r( $_REQUEST );
    echo '</pre>';

    // để lấy 1 phần tử nào đó: $_REQUEST['name của phần tử']
    echo ($_REQUEST['usename'] . '<br>');
    echo ($_REQUEST['password'] . '<br>');
    

?>