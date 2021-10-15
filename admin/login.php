<?php

include "../shared/head.php";
include "../shared/nav.php";
include "../genral/configDatabase.php";
include "../genral/function.php";

if(isset($_POST['login'])){
  $user= $_POST['user'];
  $password= $_POST['password'];
  $select="SELECT * FROM `Admins` WHERE name='$user' and password=' $password'";
  $s = mysqli_query($conn, $select);
  $num=mysqli_num_rows($s);
  if($num>0){
      $_SESSION['admin']= $user;
      header("location:/Bank/custmers/list.php");
   }else{
    echo "False Admin";
}
  
}

//print_r( $_SESSION);


?>

   <h1 class="text-center"> Welcome AT Add Login Page </h1>

<div class="container col- xl-4  col-lg-5  col-md-6  col-sm-12">
   <div class="card">
      <div class="card-body">
         <form action="" method="POST">
            <div class="form-group">
               <label for=""> user Name </label>
               <input type="text" name="user" class="form-control">
            </div>
            <div class="form-group">
               <label for=""> user password </label>
               <input type="text"  name="password" class="form-control">
            </div>
            <button class="btn btn-info btn-block" name="login">Send Data</button>

           
         </form>
      </div>
   </div>
      

</div>









 
   <?php   include "../shared/script.php" ?>
 
 
 
   
