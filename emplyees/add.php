
<?php

include "../shared/head.php";
include "../shared/nav.php";
include "../genral/configDatabase.php";
include "../genral/function.php";


if(isset($_POST['send'])){
  $name= $_POST['name'];
  $phone= $_POST['phone'];
  $depid=$_POST['depid'];
  $insert="INSERT INTO  `employees` VALUES (NULL,' $name',' $phone',' $depid') ";
  $i=mysqli_query($conn, $insert);
}

$select="SELECT * FROM `department` ";
$s = mysqli_query($conn, $select);

$name="";
$phone="";
$depid="";
$update= false;

if(isset($_GET['edit'])){
   $update= true;

   $id = $_GET['edit'];
   $select = "SELECT * FROM `employees` WHERE id = $id";
   $ss=mysqli_query($conn ,$select);
   $row=mysqli_fetch_assoc($ss);
   $name = $row['name'];
   $phone = $row['phone'];
   $depid = $row['depid'];

   if(isset($_POST['update'])){
      $name= $_POST['name'];
      $phone= $_POST['phone'];
      $depid=$_POST['depid'];
      $update = "UPDATE `employees` SET name='$name', phone='$phone', depid=' $depid' WHERE id= $id";
      $u=mysqli_query($conn , $update);
      header("location:/Bank/emplyees/list.php");

   }

}
if(isset($_SESSION['admin'])){

}else{
   header("location:/Bank/admin/login.php");
   
}

?>

<?php if(!$update):?>
   <h1 class="text-center"> Welcome AT Add employees Page </h1>
<?php else: ?>
   <h1 class="text-center"> Update employees : <?php echo $name ?> </h1>
<?php endif; ?>   

<div class="container col- xl-4  col-lg-5  col-md-6  col-sm-12">
   <div class="card">
      <div class="card-body">
         <form action="" method="POST">
            <div class="form-group">
               <label for=""> employees Name </label>
               <input type="text" value="<?php echo $name ?>" name="name" class="form-control">
            </div>
            <div class="form-group">
               <label for=""> employees phone </label>
               <input type="text" value="<?php echo $phone ?>" name="phone" class="form-control">
            </div>
            <div class="form-group">
               <label for=""> Department <?php echo $depid ?> </label>
               <select name="depid" class="form-control">
                  <?php foreach($s as $data){ ?>
                     <option value="<?php echo $data['id'] ?>"> <?php echo $data ['name'] ?> </option>
                  <?php } ?>  
               </select>
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
 
 
 
   
