<?php
  session_start();

  if(!isset($_SESSION['username']))
  {
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>teacher page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>
</head>

<body>
   <h1>teacher dashboard</h1>

   <a href="index.php">logout</a>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">

    </footer>



</body>

</html>