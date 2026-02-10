<?php 
include('dbcon.php');?>

<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM `technicians` WHERE `id`= ";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Query Failed");
    }
    else{
        header('location:index.php?delete_msg="the Data has been deleted successfully');

    }
}
?>