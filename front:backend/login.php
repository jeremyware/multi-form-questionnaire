<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <link rel="stylesheet" href="assets/css/style.css">

 <title>Login</title>
</head>

<body>

 <?php
 include(ROOT_PATH . "/app/includes/header.php");
 ?>

 <div class="auth-content">

  <form action="login.php" method="post">
   <h2 class="form-title">Login</h2>
   <?php include(ROOT_PATH . "/app/helpers/userErrors.php"); ?>

   <div>
    <label>Username</label>
    <input type="text" name="usersName" value="<?php echo $usersName; ?>" class="text-input">
   </div>
   <div>
    <label>Password</label>
    <input type="password" name="usersPwd" value="<?php echo $usersPwd; ?>" class="text-input">
   </div>
   <div>
    <button type="submit" name="login-btn" class="btn btn-big">Login</button>
   </div>
   <p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
  </form>

 </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
 <script src="/assets/js/scripts.js"></script>
 <script src="/assets/js/forms.js"></script>
 </script>
</body>

</html>