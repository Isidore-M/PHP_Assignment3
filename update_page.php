<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Management</title>
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-white p-4 shadow-sm rounded">
            <?php 
            if(isset($_GET['id']) && isset($_GET['table'])){
                $id = $_GET['id'];
                $table = $_GET['table'];
                $idCol = ($table == 'products') ? 'productCode' : 'id';

                $query = "SELECT * FROM `$table` WHERE `$idCol` = '$id'";
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($result);
            }
            ?>

            <h3>Update <?php echo ucfirst(rtrim($table, 's')); ?></h3>
            <hr>

            <form action="edit_logic.php" method="POST">
                <input type="hidden" name="table" value="<?php echo $table; ?>">
                <input type="hidden" name="target_id" value="<?php echo $id; ?>">

                <?php if($table == 'products'): ?>
                    <label>Product Name</label>
                    <input type="text" name="pname" class="form-control mb-3" value="<?php echo $row['name']; ?>">
                    <label>Version</label>
                    <input type="text" name="pversion" class="form-control mb-3" value="<?php echo $row['version']; ?>">
                    <label>Release Date</label>
                    <input type="date" name="pdate" class="form-control mb-3" value="<?php echo $row['releaseDate']; ?>">

                <?php elseif($table == 'technicians'): ?>
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control mb-3" value="<?php echo $row['firstName']; ?>">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control mb-3" value="<?php echo $row['lastName']; ?>">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control mb-3" value="<?php echo $row['email']; ?>">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control mb-3" value="<?php echo $row['phone']; ?>">

                <?php elseif($table == 'customers'): ?>
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control mb-3" value="<?php echo $row['firstName']; ?>">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control mb-3" value="<?php echo $row['lastName']; ?>">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control mb-3" value="<?php echo $row['address']; ?>">
                    <label>City</label>
                    <input type="text" name="city" class="form-control mb-3" value="<?php echo $row['city']; ?>">
                <?php endif; ?>

                <input type="submit" class="btn btn-success w-100" name="updateData" value="Update Record">
                <a href="index.php" class="btn btn-secondary w-100 mt-2">Back</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>