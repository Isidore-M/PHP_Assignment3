<?php
include 'dbcon.php';
?>

<!-- Insert Product-->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['addProduct'])){

$pcode=$_POST['pcode'];
$pname=$_POST['pname'];
$pversion=$_POST['pversion'];
$pdate=$_POST['pdate'];

$query = "INSERT INTO `products` (`productCode`,`name`,`version`,`releaseDate`) VALUES ('$pcode','$pname','$pversion','$pdate')";
$result= mysqli_query($connection,$query);

 if(!$result){
    die("query failed");
 }
 else{
    header('location:index.php?insert_msg= Your data has been added succesfully ');
 }
  
}
?>


<!-- Insert Technician-->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['addTechnician'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$query = "INSERT INTO `technicians` (`firstName`,`lastName`,`email`,`phone`, `passwordHash`) VALUES ('$fname','$lname','$email','$phone', '$password')";
$result= mysqli_query($connection,$query);

 if(!$result){
    die("query failed");
 }
 else{
    header('location:index.php?insert_msg= Your data has been added succesfully ');
 }
  
} 

?>



<!-- Insert Customer -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['addCustomer'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$postal=$_POST['postal'];
$country=$_POST['lname'];
$email=$_POST['country'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];

$query = "INSERT INTO `customers` (`firstName`,`lastName`,`address`,`city`,`state`,`postalCode`,`countryCode`,`phone`,`email`, `passwordHash`) VALUES ('$fname','$lname','$address','$city', '$state','$postal','$country', '$phone','$email', '$password')";
$result= mysqli_query($connection,$query);

 if(!$result){
    die("query failed");
 }
 else{
    header('location:index.php?insert_msg= Your data has been added succesfully ');
 }
  
} 

?>