<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit(); 
}

$host = "localhost";
$user = "root";
$password = "";
$db = "school";

$data = mysqli_connect($host, $user, $password, $db);


$username = $_SESSION['username'];


$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($data, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>student page</title>
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
    }
    .para {
      padding: 20px;
      margin-top: -10px;
    }
    .para p{
      padding: 10px;
      font-size: 18px;
    }

    .name{
      display: inline;
      color:blue;
    }
  </style>
</head>

<body>
  <header>
    <a href="student.php">student dashboard</a>
    <div class="logout">
      <a href="index.php">logout</a>
    </div>
  </header>
  <aside>
    <ul>
      <li><a href="update_info.php">Update my info</a></li>
      <li><a href="view_score.php">view my score</a></li>

  </aside>
  <div class="content">
     <h1>Update my info</h1>
  </div>




</body>

</html>