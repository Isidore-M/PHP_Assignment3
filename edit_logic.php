<?php
include('dbcon.php');

if(isset($_POST['updateData'])){

    $table = $_POST['table'];
    $id = $_POST['target_id'];

    // ==========================
    // UPDATE PRODUCTS
    // ==========================
    if($table == 'products'){

        $name = $_POST['pname'];
        $version = $_POST['pversion'];
        $date = $_POST['pdate'];

        $query = "UPDATE `products`
                  SET `name`='$name',
                      `version`='$version',
                      `releaseDate`='$date'
                  WHERE `productCode`='$id'";

    }

    // ==========================
    // UPDATE TECHNICIANS
    // ==========================
    elseif($table == 'technicians'){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $query = "UPDATE `technicians`
                  SET `firstName`='$fname',
                      `lastName`='$lname',
                      `email`='$email',
                      `phone`='$phone'
                  WHERE `id`='$id'";
    }

    // ==========================
    // UPDATE CUSTOMERS
    // ==========================
    elseif($table == 'customers'){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];

        $query = "UPDATE `customers`
                  SET `firstName`='$fname',
                      `lastName`='$lname',
                      `address`='$address',
                      `city`='$city'
                  WHERE `id`='$id'";
    }

    // ==========================
    // UPDATE INCIDENTS  ✅ THIS WAS MISSING
    // ==========================
    elseif($table == 'incidents'){

        $productCode = $_POST['productCode'];
        $customerID = $_POST['customerID'];
        $dateOpened = $_POST['dateOpened'];
        $dateClosed = $_POST['dateClosed'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE `incidents`
                  SET `productCode`='$productCode',
                      `customerID`='$customerID',
                      `dateOpened`='$dateOpened',
                      `dateClosed`='$dateClosed',
                      `title`='$title',
                      `description`='$description'
                  WHERE `incidentID`='$id'";
    }

    // Run Query
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Update failed: " . mysqli_error($connection));
    } else {
        header("Location: index.php?update_success=1");
    }
}
?>