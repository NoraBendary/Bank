<?php


include "../shared/head.php";
include "../shared/nav.php";
include "../genral/configDatabase.php";
include "../genral/function.php";



if(isset($_POST['send'])){
  $name= $_POST['name'];
  $insert="INSERT INTO  `department` VALUES (NULL,' $name') ";
  $i=mysqli_query($conn, $insert);
}

//$select="SELECT * FROM `department` ";
//$s = mysqli_query($conn, $select);

$name="";
$update= false;

if(isset($_GET['edit'])){
   $update= true;

   $id = $_GET['edit'];
   $select = "SELECT * FROM `department` WHERE id = $id";
   $ss=mysqli_query($conn ,$select);
   $row=mysqli_fetch_assoc($ss);
   $name = $row['name'];
   

   if(isset($_POST['update'])){
      $name= $_POST['name'];
      $update = "UPDATE `department` SET name='$name' WHERE id= $id";
      $u=mysqli_query($conn , $update);
      header("location:/Bank/department/list.php");

   }

}

if(isset($_SESSION['admin'])){

}else{
   header("location:/Bank/admin/login.php");
   
}


?>

<?php if(!$update):?>
   <h1 class="text-center"> Welcome AT Add Department Page </h1>
<?php else: ?>
   <h1 class="text-center"> Update Department : <?php echo $name ?> </h1>
<?php endif; ?>   

<div class="container col- xl-4  col-lg-5  col-md-6  col-sm-12">
   <div class="card">
      <div class="card-body">
         <form action="" method="POST">
            <div class="form-group">
               <label for=""> Department Name </label>
               <input type="text" value="<?php echo $name ?>" name="name" class="form-control">
            </div>
            <?php if($update){?>
            <button class="btn btn-info btn-block" name="update">Update Data</button>
            <?php } else{ ?>
            <button class="btn btn-info btn-block" name="send">Send Data</button>
            <?php } ?>
         </form>
      </div>
   </div>
      

</div>









 
   <?php   include "../shared/script.php" ?>
 
 
 
   