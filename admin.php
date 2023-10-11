<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>admin page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      margin: 0px;
      padding: 0px;
    }

    header {
      background-color: skyblue;
      line-height: 75px;
      padding-left: 30px;
    }

    a {
      text-decoration: none;
    }

    .logout {
      float: right;
      padding-right: 50px;
    }
    aside li{
      margin-top: 30px;
      margin-left: 20px;
      text-decoration: none;
      
    }
    ul {
      background-color: ;
    }
  </style>
</head>

<body>
  <header>
    <a href="">admin dashboard</a>
    <div class="logout">
      <a href="index.php">logout</a>
    </div>
  </header>
  <aside>
    <ul>
      <li><a href="">add student</a></li>
      <li><a href="">view student</a></li>
      <li><a href="">add teacher</a></li>
      <li><a href="">view teacher</a></li>
      <li><a href="">add course</a></li>
      <li><a href="">view course</a></li>
    </ul>
  </aside>



  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">

  </footer>



</body>

</html>