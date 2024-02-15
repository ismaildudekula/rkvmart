<?php 
session_start();
?>
<head>

<style>
  .icon-black{
    color: black;
  }
  .icon-collapsing{
    color: black;
  }
</style>
</head>
<nav class="navbar navbar-expand-lg bg-light border shadow-sm">
    <div class="container-fluid m-2">
      <a class="navbar-brand text-dark" href="index.php"><h4>BUYLO.</h4></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon icon-toggle icon-collapsing"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item">
            <form class="d-flex" role="search" method="GET" action="searchresult.php">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" required>
              <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
          </li>
        </ul>
        <?php
        if(isset($_SESSION['UID'])){
        ?> 
          <a href="profileIndex.php" class='btn btn-dark rounded m-2'>Profile</a>
          <a href="upload_product_form.php" class="btn btn-dark m-2" >+ Sell</a>
          <a href="logout.php"><button type="submit" class="btn btn-dark  m-2" >Logout</button></a>
        <?php
        }
        else{ 
        ?>
          <a href="login_form.php" class="btn btn-dark m-2 rounded">Login</a>
          <a href="register.html" class="btn btn-dark rounded">Register</a>
        <?php
        }
        ?>
      </div>
    </div>
  </nav>