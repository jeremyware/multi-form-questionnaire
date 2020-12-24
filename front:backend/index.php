<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/retailForm.php"); ?>


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
 <link rel="stylesheet" href="assets/css/admin.css">


 <title>Home</title>
</head>

<body>

 <?php
 include(ROOT_PATH . "/app/includes/header.php");
 include(ROOT_PATH . "/app/includes/messages.php");

 ?>

 <div class="page-wrapper">

  <div class="post-slider">
   <h1 class="slider-title">Questonnaires</h1>
   <!-- <i class="fas fa-chevron-left prev"></i>
   <i class="fas fa-chevron-right next"></i> -->

   <div class="post-wrapper">

    <div class="post">
     <h4><a href="retailForm.phpß">Retail Questionnaire</a></h4>

     <div class="post-info">
      <i class="far fa-user"> Platinum Payments</i>
      &nbsp;
      <i class="far fa-calendar"> Dec 20, 2010</i>
     </div>
    </div>

    <div class="post">
     <h4><a href="retailForm.phpß">Retail Questionnaire</a></h4>

     <div class="post-info">
      <i class="far fa-user"> Platinum Payments</i>
      &nbsp;
      <i class="far fa-calendar"> Dec 20, 2010</i>
     </div>
    </div>

    <div class="post">

     <div class="post-info">
      <h4><a href="retailForm.phpß">Retail Questionnaire</a></h4>

      <i class="far fa-user"> Platinum Payments</i>
      &nbsp;
      <i class="far fa-calendar"> Dec 20, 2010</i>
     </div>
    </div>
   </div>

  </div>

  <div class="content clearfix">

   <div class="main-content">
    <h1 class="recent-post-title">Recentely Completed</h1>

    <div class="post clearfix">
     <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

     <table>
      <thead>
       <th>SN</th>
       <th>Name</th>
       <th colspan="2">Action</th>
      </thead>
      <tbody>
       <?php foreach ($rtlForms as $key => $rtlForm) : ?>
        <tr>
         <td><?php echo $key + 1; ?></td>
         <td><?php echo $rtlForm['rtlBusinessName']; ?></td>
         <td><a href="edit.php?id=<?php echo $rtlForm['id']; ?>" class="edit">edit</a></td>
         <td><a href="index.php?rev_id=<?php echo $rtlForm['id']; ?>" class="delete">Review</a></td>
        </tr>
       <?php endforeach; ?>

      </tbody>
     </table>

    </div>

   </div>


  </div>
 </div>
 </div>
 <?php include(ROOT_PATH . "/app/includes/footer.php");
 ?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
 <script src="/assets/js/scripts.js"></script>
 <script src="/assets/js/forms.js"></script>