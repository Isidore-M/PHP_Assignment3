                <?php
 include('dbcon.php');
 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/app.css">
    <style>
         .nav .navItem a.nav-link.active{
            color:#fff !important;
            background:#23a358;
        }
        .bi{
            margin-right: 0.7rem;
        }
        .d-flex{
            position: sticky ;
            top:0;
            margin-top: 1.5rem;
            
        }
        #sidebar{
            border: solid 1px #f2f2f2;
        }
       
        .head_element{
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky ;
            top:0;
            width: 100%;
            background:rgb(234, 248, 233);
            height: fit-content;
            padding: 1% 3%;
        }
        .button{
            background:#000;
            padding: 0.3rem 0.6rem;
            border-radius: 0.7rem;
        }
        a{
            text-decoration: none;
            color: #fff;
            transition: all 5ms ease-in-out ;
        }
        .button:hover{
            background:#44BBA4;
            
        }
        .content{
            width: 100%;
            margin-top: 1rem;
    
        }
        input{
            margin-bottom: 0.7rem;
        }
        .btn{
            border-radius: 2rem;
        }
       
        .navItem-logo{
            padding-bottom: 2.5rem;
            width: 7.5rem;
            place-self:center;
            padding: 0.4rem;
            margin-bottom: 1rem;
            padding-top: 1rem;
        }
        p{
            font-size: 0.8rem;
        }
       .alert{
        margin: 0.9rem 0;
        display: flex;
        justify-content: space-between;
        padding: 0.3rem;
        padding-left: 0.9rem;
        background:#c3e2f9;
        border: 1px solid #3aaaff;
        color: #000;
        font-size: 0.9em;
      
       }
      
      .clo{
        border: none;
        background:none;
        display: flex;
       
        
      }
      .bi1{
        margin: 0;
      }
      h6{
        color:rgb(234, 99, 108);
        font-size: 0.8rem;
        font-weight: 300;
      }    
       
    </style>
    <title>Document</title>
</head>
<body>
   
    <div class="container-fluid p-1 d-flex">
        <div class="d-flex  flex-column bg-light-subtle vh-100" style="width: 15em;" id="sidebar" >
            <ul class="nav nav-pills flex-column">
                <li class="navItem-logo"> <a href="#index.php"><img src="./Assets/images/logo tech support.svg"  alt="logo"></a></li>
                <li class="navItem">
                    <a href="#" class="nav-link active py-3 border-bottom rounded-0 text-black " data-bs-toggle ="tab" data-bs-target="#products">
                    <i class="bi bi-box-seam"></i><span>Product</span>
                    </a>
                </li>
                <li class="navItem">
                    <a href="#" class="nav-link py-3 border-bottom rounded-0 text-black "data-bs-toggle ="tab" data-bs-target="#technicians">
                    <i class="bi bi-briefcase"></i><span>Technicians</span>
                    </a>
                </li>
                <li class="navItem">
                    <a href="#" class="nav-link py-3 border-bottom rounded-0 text-black "data-bs-toggle ="tab" data-bs-target="#customers">
                    <i class="bi bi-people"></i><span>Customers</span>
                    </a>
                </li>
                <li class="navItem">
                    <a href="#" class="nav-link py-3 border-bottom rounded-0 text-black "data-bs-toggle ="tab" data-bs-target="#incidents">
                    <i class="bi bi-x-octagon"></i><span>Incidents</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="tab-content w-100 p-4">

            <div class="tab-pane fade show active" id="products">

            <div class="head_element">
                <div class="title">
                    <h3>Product Management</h3>
                    <p> Here you can add,and delete products from the database</p>
                </div>
                <a href="#addProductModal" class="button" data-toggle ="modal" data-bs-toggle="modal" > <i class="bi bi-plus-circle-fill"></i> Add product</a>
            </div>
                                 <!-- Display the Alert-->
                        <?php 
                            if (isset($_GET['insert_msg'])){
                                $insert_msg = $_GET['insert_msg'];
                            echo'<div class="alert alert-warning alert-dismissible fade show " role="alert" id ="al">
                                    '.$insert_msg.'
                                    <button type="button" class="clo"  data-bs-dismiss="alert" " > <i class="bi1 bi-x-circle"></i> </button>
                                    
                                </div>';
                        }
                        ?>
    <div class="content">
        <table class="table table-bordered table-hover table-striped">

            <thead class="table-dark">
                <tr>
                    <th> ID</th>
                    <th> Name</th>
                    <th> Version</th>
                    <th> Year</th>
                    <th class="text-center">Update</th>
                    <th class="text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // make the query first
                    $query = "select * from `products`";
                    // assign the result
                    $result = mysqli_query($connection,$query);
                    //test the result
                    if(!$result){
                        die("query failed");
                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                          <tr>
                                <td> <?php echo $row['productCode']; ?> </td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['version']; ?> </td>
                                <td> <?php echo $row['releaseDate']; ?> </td> 
                                <td class="text-center"> 
                                    <a href="update_page.php?id=<?php echo $row['productCode']; ?>&table=products" class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center"> 
                                    <a href="delete_page.php?id=<?php echo $row['productCode']; ?>&table=products" class="btn btn-danger">Delete</a>
                                </td>
                          </tr>
                                
                            <?php
                        }
                    }
                ?>
              
            </tbody>

        </table>
    </div>

            </div>

            <div class="tab-pane fade show" id="technicians">
                 <div class="head_element">
                <div class="title">
                    <h3>Technicians Management</h3>
                    <p> Here you can add,and delete technicians from the database</p>
                </div>
                <a href="#addTechnicianModal" class="button" data-toggle="modal" data-bs-toggle="modal"> <i class="bi bi-plus-circle-fill"></i> Add Technician</a>
            </div>

                                 <!-- Display the Alert-->
                        <?php 
                            if (isset($_GET['delete_msg'])){
                                $delete_msg = $_GET['delete_msg'];
                            echo'<div class="alert alert-warning alert-dismissible fade show " role="alert" id ="al">
                                    '.$delete_msg.'
                                    <button type="button" class="clo"  data-bs-dismiss="alert" " > <i class="bi1 bi-x-circle"></i> </button>
                                    
                                </div>';
                        }
                        ?>
            <div class="content">
            <table class="table table-bordered table-hover table-striped">

            <thead class="table-dark">
                <tr>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Password </th>
                    <th class="text-center">Update</th>
                    <th class="text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // make the query first
                    $query = "select * from `technicians`";
                    // assign the result
                    $result = mysqli_query($connection,$query);
                    //test the result
                    if(!$result){
                        die("query failed");
                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                          <tr>
                                <td> <?php echo $row['firstName']; ?> </td>
                                <td> <?php echo $row['lastName']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['phone']; ?> </td>
                                <td> <?php echo $row['passwordHash']; ?> </td>  
                                <td class="text-center"> 
                                    <a href="update_page.php?id=<?php echo $row['id']; ?>&table=technicians" class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center"> 
                                    <a href="delete_page.php?id=<?php echo $row['id']; ?>&table=technicians" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this technician?')">Delete</a>
                                </td>    
                          </tr>
                                
                            <?php
                        }
                    }
                ?>
              
            </tbody>

            </table>
            </div>

            </div>
            <div class="tab-pane fade show" id="customers">
                 <div class="head_element">
                <div class="title">
                    <h3>Customers Management</h3>
                    <p> Here you can add,and delete customers from the database</p>
                </div>
                <a href="#addCustomerModal" class="button" data-toggle="modal" data-bs-toggle="modal"> <i class="bi bi-plus-circle-fill"></i>Add a new Customer</a>
            </div>
                <div class="content">
        <table class="table table-bordered table-hover table-striped">

            <thead class="table-dark">
                <tr>
                    <th> Name</th>
                    <th> Address</th>
                    <th> City</th>
                    <th> State</th>
                    <th> Phone</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // make the query first
                    $query = "select * from `customers`";
                    // assign the result
                    $result = mysqli_query($connection,$query);
                    //test the result
                    if(!$result){
                        die("query failed");
                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                          <tr>
                                <td> <?php echo "{$row['firstName']} {$row['lastName']}"; ?> </td>
                                <td> <?php echo $row['address']; ?> </td>
                                <td> <?php echo $row['city']; ?> </td>
                                <td> <?php echo $row['state']; ?> </td> 
                                <td> <?php echo $row['phone']; ?> </td>
                                <td class="text-center">
                                    <a href="update_page.php?id=<?php echo $row['id']; ?>&table=customers" class="btn btn-success">Update</a>
                                    <a href="delete_page.php?id=<?php echo $row['id']; ?>&table=customers" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</a>
                                </td>
                          </tr>
                                
                            <?php
                        }
                    }
                ?>
              
            </tbody>

        </table>
    </div>

            </div>
            <div class="tab-pane fade show" id="incidents">
                 <div class="head_element">
                <div class="title">
                    <h3>Incidents Management</h3>
                    <p> Here you can add,and delete products from the database</p>
                </div>
                <a href="#" class="button"> <i class="bi bi-plus-circle-fill"></i> Add product</a>
            </div>
                <h1> this is the Incidents content</h1>

            </div>

        </div>

    </div>
 
<?php 
include('addProduct.php');
?>

<?php 
include('addTechnician.php');
include('addCustomer.php');
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>