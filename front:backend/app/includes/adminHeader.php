<?php include("../../path.php");
?>


<header>
 <div class="logo">
  <h1 class="logo-text"><span>Platinum</span>Payments</h1>
 </div>
 <i class="fa fa-bars menu-toggle"></i>
 <ul class="nav">
  <li>
   <a href="#">
    <i class="fa fa-user"></i>
    <?php echo $_SESSION['usersName'] ?>
    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
   </a>
   <ul>
    <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
   </ul>
  </li>
 </ul>
</header>