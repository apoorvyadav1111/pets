<?php
session_start();
global $mysqli;
$mysqli = mysqli_connect("localhost", "root", "gixxer150tallu", "pets");
//check connection
if (mysqli_connect_errno()) {
    printf("Connect failed %s\n", mysqli_connect_error());
    exit();}
else {
    printf("host information: %s\n", mysqli_get_host_info($mysqli));
}
$query="Select * from pet where idpet=1";
$result=mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$pet=mysqli_fetch_assoc($result);
echo "<table><tr><td>".$pet['idpet']."</td><td>".$pet['type']."</td><td>".$pet['breed']."</td><td>".$pet['age']."</td><td>".$pet['price']."</td></tr></table>";







?>