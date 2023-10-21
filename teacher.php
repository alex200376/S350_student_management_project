<?php
session_start();

if (!isset($_SESSION['username'])) {
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
      color: white;
      font-weight: 800;
    }

    .logout {
      float: right;
      padding-right: 50px;

      background-color: #skyblue;
    }

    aside li {
      padding: 20px;
      text-decoration: none;

      list-style: none;
      font-size: 15px;
    }

    aside li a:hover {
      color: lightblue;
    }

    ul {
      background-color: grey;
      width: 18%;
      height: 100%;
      text-align: center;
      position: fixed;

    }

    .content {
      margin-left: 20%;
      margin-top: 5%;
      font-size: 150%;
    }
  </style>
</head>

<body>
  <header>
    <a href="teacher.php">Teacher dashboard</a>
    <div class="logout">
      <a href="index.php">logout</a>
    </div>
  </header>
  <aside>
    <ul>
    <li><a href="show_myinfo.php">view my info</a></li>
    <li><a href="tview_student.php">view students</a></li>

  </aside>
  <div class="content">
    <div>
      <h1>Welcome to the Teacher Dashboard!</h1>
      <p>-In this digital realm, you'll discover a world where adorable dogs play a vital role in education.</p>
      <p>-Get ready to embark on a <strong>pawsome</strong> journey of knowledge and growth.</p>
    </div>

  </div>




</body>

</html>