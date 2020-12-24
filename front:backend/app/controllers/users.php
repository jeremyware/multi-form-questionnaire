<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUsers.php");

$errors = array();
$fullName = '';
$usersName = '';
$usersEmail = '';
$usersPwd = '';
$passwordConf = '';
$table = 'PlatPayUsers';

function loginUser($user)
{
 $_SESSION['id'] = $user['id'];
 $_SESSION['usersName'] = $user['usersName'];
 $_SESSION['admin'] = $user['admin'];
 $_SESSION['message'] = 'You have logged in!';
 $_SESSION['type'] = 'success';

 if ($_SESSION['admin']) {
  header('location:' . BASE_URL . '/admin/dashboard.php');
 } else {
  header('location:' . BASE_URL . 'index.php');
 }
 exit();
}
if (isset($_POST['register-btn'])) {
 $errors = validateUsers($_POST);

 if (count($errors) === 0) {
  unset($_POST['register-btn'], $_POST['passwordConf']);
  $_POST['admin'] = 0;
  $_POST['usersPwd'] = password_hash($_POST['usersPwd'], PASSWORD_DEFAULT);

  $user_id = create($table, $_POST);
  $user = selectOne($table, ['id' => $user_id]);


  //log user in
  loginUser($users);
 } else {
  $fullName = $_POST['fullName'];
  $usersName = $_POST['usersName'];
  $usersEmail = $_POST['usersEmail'];
  $usersPwd = $_POST['usersPwd'];
  $passwordConf = $_POST['passwordConf'];
 }
}


if (isset($_POST['login-btn'])) {
 $errors = validateLogin($_POST);

 if (count($errors) === 0) {
  $user = selectOne($table, ['usersName' => $_POST['usersName']]);

  if ($user && password_verify($_POST['usersPwd'], $user['usersPwd'])) {
   //log user in
   loginUser($user);
  } else {
   array_push($errors, 'Invalid username or password');
  }
 }

 $usersName = $_POST['usersName'];
 $usersPwd = $_POST['usersPwd'];
}
