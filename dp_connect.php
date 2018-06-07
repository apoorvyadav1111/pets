<?php
$servername = "localhost";
$username = "root";
$password = "gixxer150tallu";

function doDB()
{
    global $mysqli;
    $mysqli = mysqli_connect("localhost", "root", "gixxer150tallu", "pets");
    //check connection
    if (mysqli_connect_errno()) {
        printf("Connect failed %s\n", mysqli_connect_error());
        exit();

    } else
        {printf("host information: %s\n",mysqli_get_host_info($mysqli));
        mysqli_close($mysqli);


}


}
?>