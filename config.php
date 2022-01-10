<?php
// To Check Database Connected Or Not, Run this file
$db = mysqli_connect('localhost', 'root', '', 'ticket'); // 1- Dont Touch 2- Username 3- Password 4- Database Name
if(!$db){
    echo mysqli_connect_error();
} else {
   echo '';
}
session_start();
define("ADMIN_USERNAME", "admin"); // ADMIN USERNAME
define("ADMIN_PASSWORD", "admin"); // ADMIN PASSWORD
require_once 'incs/functions.php'; // Functions
require_once 'incs/actions.php'; // Actions

?>