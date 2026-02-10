<?php
define("hostname", "localhost");
define("username", "root");
define("password", "");
define("database", "tech_support_db");

$connection = mysqli_connect(hostname,username,password,database);

if(!$connection){
    die("connection with the database Failed");
}

?>