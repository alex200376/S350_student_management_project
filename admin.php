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

    .dashboard-content {
      background-color: white;
      float: left;
      padding: 10px;
    }

    .dashboard-content ul {
      background-color: white;
      white-space: nowrap;
      display: inline-block;
     
    }

    .dashboard-content li {
      text-align: left;
      font-size: 20px;
      padding: 5px;
      width: auto;
      
    }

    h1 {
      margin-top: -20px;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <header>
    <a href="admin.php">admin dashboard</a>
    <div class="logout">
      <a href="index.php">logout</a>
    </div>
  </header>
  <aside>
    <ul>
      <li><a href="add_student.php">add student</a></li>
      <li><a href="view_student.php">view student</a></li>
      <li><a href="add_teacher.php">add teacher</a></li>
      <li><a href="view_teacher.php">view teacher</a></li>
      <li><a href="add_course.php">add course</a></li>
      <li><a href="view_course.php">view course</a></li>
    </ul>
  </aside>
  <div class="content">
    <div class="dashboard-content">
      <h1>Welcome to the Admin Dashboard</h1>
      <ul>
        <li>Effortlessly manage your system with our intuitive admin dashboard.</li>
        <li>Add and view teacher records:</li>
        
          <li>Track teacher details like name, contact information, and subject expertise.</li>
        
        <li>Manage student records:</li>
        
          <li>Keep track of student information, including name, <p>grade level, and contact details.</li>
        
        <li>Stay organized and ensure accurate data management for your educational institution.</li>
      </ul>
    </div>
  </div>




</body>

</html>