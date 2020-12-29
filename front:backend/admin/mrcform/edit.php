<?php include("../../path.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
 <link rel="stylesheet" href="../../assets/css/style.css">
 <link rel="stylesheet" href="../../assets/css/admin.css">

 <title>Admin Section - Add User</title>
</head>

<body>
 <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>


 <div class="admin-wrapper">

  <div class="left-sidebar">
   <ul>
    <li><a href="../posts/index.php">Manage Posts</a></li>
    <li><a href="index.php">Manage Users</a></li>
    <li><a href="../forms/index.php">Manage Forms</a></li>
   </ul>
  </div>
  <!-- // Left Sidebar -->


  <!-- Admin Content -->
  <div class="admin-content">
   <div class="button-group">
    <a href="create.html" class="btn btn-big">Add Post</a>
    <a href="index.html" class="btn btn-big">Manage Posts</a>
   </div>


   <div class="content">

    <h2 class="page-title">Manage Posts</h2>

    <form action="create.html" method="post">
     <div>
      <label>Title</label>
      <input type="text" name="title" class="text-input">
     </div>
     <div>
      <label>Body</label>
      <textarea name="body" id="body"></textarea>
     </div>
     <div>
      <label>Image</label>
      <input type="file" name="image" class="text-input">
     </div>
     <div>
      <label>Topic</label>
      <select name="topic" class="text-input">
       <option value="Poetry">Poetry</option>
       <option value="Life Lessons">Life Lessons</option>
      </select>
     </div>
     <div>
      <button type="submit" class="btn btn-big">Update Post</button>
     </div>
    </form>

   </div>

  </div>

 </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
 <script src="../../assets/js/scripts.js"></script>

</body>

</html>