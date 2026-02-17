<?php
include 'dbcon.php';

if(isset($_POST['updateData'])){
    $table = $_POST['table'];
    $id = $_POST['target_id'];

    if($table == 'products'){
        $pname = $_POST['pname'];
        $pversion = $_POST['pversion'];
        $pdate = $_POST['pdate'];
        $query = "UPDATE `products` SET `name` = '$pname', `version` = '$pversion', `releaseDate` = '$pdate' WHERE `productCode` = '$id'";
    } 
    elseif($table == 'technicians'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $query = "UPDATE `technicians` SET `firstName` = '$fname', `lastName` = '$lname', `email` = '$email', `phone` = '$phone' WHERE `id` = '$id'";
    }
    elseif($table == 'customers'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $query = "UPDATE `customers` SET `firstName` = '$fname', `lastName` = '$lname', `address` = '$address', `city` = '$city' WHERE `id` = '$id'";
    }

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Update Failed: " . mysqli_error($connection));
    } else {
        header('location:index.php?update_msg=The record has been updated successfully!');
    }
}
?>