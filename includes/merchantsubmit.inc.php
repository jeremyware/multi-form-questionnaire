<?php

if (isset($_POST["submit"])) {

 require_once "dbh.inc.php";
 require_once 'functions.inc.php';


 if (bidExists($conn,) !== false) {
  header("location: ../retailquestionnaire.php?error=businessidtaken");
  exit();
 }
 echo "Error:\n";
 print_r($conn->error_list);

 createBusiness(
  $conn,

 );
} else {
 header("location: ../retailquestionnaire.php=error/connectionfailed");
 exit();
}
