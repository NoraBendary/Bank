<?php

session_start();
if(isset($_GET['logout'])){
  session_unset();
  session_destroy();
}



?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/Bank/index.php">Bank Audi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php if(isset($_SESSION['admin'])) : ?>
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Employees
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/Bank/emplyees/add.php">Add Employees</a>
          <a class="dropdown-item" href="/Bank/emplyees/list.php">List Employees</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Customers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/Bank/custmers/add.php">Add Customers</a>
          <a class="dropdown-item" href="/Bank/custmers/list.php">List Customers</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Depatrments
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/Bank/department/add.php">Add Depatrments</a>
          <a class="dropdown-item" href="/Bank/department/list.php">List Depatrments</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admins
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/Bank/admin/login.php">Add Admins</a>
          <a class="dropdown-item" href="#">List Admins</a>
      </li>
      
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-danger" name="logout">Logout</button>
    </form>
    <?php else: ?>
    <a href="/Bank/admin/login.php" class="btn btn-outline-success my-2 my-sm-0"  type="submit">Login</a>
    <?php endif; ?>
    
  </div>
</nav>