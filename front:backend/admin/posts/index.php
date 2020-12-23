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
    <li><a href="index.html">Manage Posts</a></li>
    <li><a href="../users/index.html">Manage Users</a></li>
    <li><a href="../topics/index.html">Manage Topics</a></li>
   </ul>
  </div>


  <div class="admin-content">
   <div class="button-group">
    <a href="create.html" class="btn btn-big">Add Post</a>
    <a href="index.html" class="btn btn-big">Manage Posts</a>
   </div>


   <div class="content">

    <h2 class="page-title">Manage Posts</h2>

    <table>
     <thead>
      <th>SN</th>
      <th>Title</th>
      <th>Author</th>
      <th colspan="3">Action</th>
     </thead>
     <tbody>
      <tr>
       <td>1</td>
       <td>This is the first post</td>
       <td></td>
       <td><a href="#" class="edit">edit</a></td>
       <td><a href="#" class="delete">delete</a></td>
       <td><a href="#" class="publish">publish</a></td>
      </tr>
      <tr>
       <td>2</td>
       <td>This is the second post</td>
       <td></td>
       <td><a href="#" class="edit">edit</a></td>
       <td><a href="#" class="delete">delete</a></td>
       <td><a href="#" class="publish">publish</a></td>
      </tr>
     </tbody>
    </table>

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