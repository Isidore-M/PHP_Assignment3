<?php
include 'dbcon.php';

/* ==========================
   INSERT PRODUCT
========================== */
if(isset($_POST['addProduct'])){

$pcode = $_POST['pcode'];
$pname = $_POST['pname'];
$pversion = $_POST['pversion'];
$pdate = $_POST['pdate'];

$query = "INSERT INTO `products`
(`productCode`,`name`,`version`,`releaseDate`)
VALUES
('$pcode','$pname','$pversion','$pdate')";

$result = mysqli_query($connection,$query);

if(!$result){
    die("Product insert failed: " . mysqli_error($connection));
}
else{
    header('location:index.php?insert_msg=Product added successfully');
}
}


/* ==========================
   INSERT TECHNICIAN
========================== */
if(isset($_POST['addTechnician'])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$query = "INSERT INTO `technicians`
(`firstName`,`lastName`,`email`,`phone`,`passwordHash`)
VALUES
('$fname','$lname','$email','$phone','$password')";

$result = mysqli_query($connection,$query);

if(!$result){
    die("Technician insert failed: " . mysqli_error($connection));
}
else{
    header('location:index.php?insert_msg=Technician added successfully');
}
}


/* ==========================
   INSERT CUSTOMER
========================== */
if(isset($_POST['addCustomer'])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$postal = $_POST['postal'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO `customers`
(`firstName`,`lastName`,`address`,`city`,`state`,
 `postalCode`,`countryCode`,`phone`,`email`,`passwordHash`)
VALUES
('$fname','$lname','$address','$city','$state',
 '$postal','$country','$phone','$email','$password')";

$result = mysqli_query($connection,$query);

if(!$result){
    die("Customer insert failed: " . mysqli_error($connection));
}
else{
    header('location:index.php?insert_msg=Customer added successfully');
}
}


/* ==========================
   INSERT INCIDENT
========================== */
if(isset($_POST['addIncident'])){

$productCode = $_POST['productCode'];
$customerID = $_POST['customerID'];
$dateOpened = $_POST['dateOpened'];
$dateClosed = $_POST['dateClosed'];
$title = $_POST['title'];
$description = $_POST['description'];

$query = "INSERT INTO `incidents`
(`productCode`,`customerID`,`dateOpened`,`dateClosed`,`title`,`description`)
VALUES
('$productCode','$customerID','$dateOpened','$dateClosed','$title','$description')";

$result = mysqli_query($connection,$query);

if(!$result){
    die("Incident insert failed: " . mysqli_error($connection));
}
else{
    header('location:index.php?insert_msg=Incident created successfully');
}
}

?>