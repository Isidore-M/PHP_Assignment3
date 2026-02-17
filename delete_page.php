<?php 
include('dbcon.php');

if(isset($_GET['id']) && isset($_GET['table'])){
    $id = $_GET['id'];
    $table = $_GET['table'];
    
    // Determine the ID column name (products usually use productCode, others use id)
    $idColumn = ($table == 'products') ? 'productCode' : 'id';

    // Using mysqli_real_escape_string for a bit of safety
    $query = "DELETE FROM `$table` WHERE `$idColumn` = '$id'";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed: " . mysqli_error($connection));
    } else {
        header('location:index.php?delete_msg=Data has been deleted successfully');
    }
}
?>