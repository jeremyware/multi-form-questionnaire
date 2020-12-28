<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
  #sign {
   border: 4px solid #ccc;
  }
 </style>
</head>

<body>
 <canvas id="sign">
  <input type="button" value="Reset" id="resetSign">
 </canvas>
 <script>
  $(document).ready(function() {
   $('#sign').sign({
    resetButton: $('#resetSign'),
    lineWidth: 5,
    width: 300,
    height: 200
   })
  })
 </script>
</body>
<script src="../assets/js/sign.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</html>