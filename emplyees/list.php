<?php

include "../shared/head.php";
include "../shared/nav.php";
include "../genral/configDatabase.php";
include "../genral/function.php";


$select = "SELECT * FROM `employees`";
$s = mysqli_query($conn ,$select);


if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM `employees` WHERE id= $id ";
    $d = mysqli_query($conn, $delete);
    header("location:/Bank/emplyees/list.php");
}

if(isset($_SESSION['admin'])){

}else{
   header("location:/Bank/admin/login.php");
   
}


?>



<h1 class="text-center"> Welcome AT List employees Page </h1>

<div class="container col- xl-4  col-lg-5  col-md-6  col-sm-12">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Action</th>

                </tr>
                <?php foreach($s as $data){ ?>
                       <tr>
                            <td> <?php echo $data ['id'] ?> </td>
                            <td> <?php echo $data ['name'] ?> </td>
                            <td> <?php echo $data ['phone'] ?> </td>
                            <td> <?php echo $data ['depid'] ?> </td>
                            <td>
                              <a href="list.php?delete=<?php echo $data ['id'] ?>" class="btn btn-danger">Delete</a> 
                              <a href="add.php?edit=<?php echo $data ['id'] ?>" class="btn btn-info">Edit</a> 

                            </td>
                       </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>












<?php include "../shared/script.php" ?>