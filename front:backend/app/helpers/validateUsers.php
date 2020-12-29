<?php

function validateUsers($user)
{

 $errors = array();

 if (empty($user['fullName'])) {
  array_push($errors, 'Name is required');
 }

 if (empty($user['usersName'])) {
  array_push($errors, 'Username is required');
 }

 if (empty($user['usersEmail'])) {
  array_push($errors, 'Email is required');
 }

 if (empty($user['usersPwd'])) {
  array_push($errors, 'Password is required');
 }

 if ($user['passwordConf'] !== $user['usersPwd']) {
  array_push($errors, 'Password do not match');
 }

 $exstingUser = selectOne('PlatPayUsers', ['usersName' => $user['usersName']]);
 if ($exstingUser) {
  array_push($errors, 'Username taken');
 }

 $exstingEmail = selectOne('PlatPayUsers', ['usersEmail' => $user['usersEmail']]);
 if ($exstingEmail) {
  array_push($errors, 'Email taken');
 }

 return $errors;
}

function validateLogin($user)
{

 $errors = array();

 if (empty($user['usersName'])) {
  array_push($errors, 'Username is required');
 }


 if (empty($user['usersPwd'])) {
  array_push($errors, 'Password is required');
 }

 return $errors;
}
