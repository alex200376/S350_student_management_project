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
  <title><?php echo $username ?>'s page</title>
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
    <a href="student.php">Student dashboard</a>
    <div class="logout">
      <a href="index.php">logout</a>
    </div>
  </header>
  <aside>
    <ul>
      <li><a href="view_myinfo.php">view my info</a></li>
      <li><a href="view_score.php">view my score</a></li>

  </aside>
  <div class="content">
    <div class="para">
      <h1>Welcome to the Student Dashboard! <div class="name"><?php echo "{$_SESSION['username']}!"; ?></div></h1>
      <p>
        • Conveniently access and manage your academic information.
      </p>
      <p>
        • View your GPA and stay updated on your academic progress.
      </p>
      <p>
        • Update your personal information and password easily.
      </p>
      <p>
        • Keep your personal details accurate and secure.
      </p>
      <h2>Welcome to the Student Dashboard, your gateway to academic excellence!</h2>
    </div>

  </div>




</body>

</html>