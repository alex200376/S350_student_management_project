<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location:index.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "school";
$data = mysqli_connect($host, $user, $password, $db);


$sql = "SELECT * FROM courses where id IS NOT NULL";
$result = mysqli_query($data, $sql);

if (isset($_POST['add_course'])) {
    
    $Course = $_POST['course'];
    $des=$_POST['des'];
   
    $check = "SELECT * FROM courses WHERE name ='$Course'";

    $check_course= mysqli_query($data, $check);

    $row_count = mysqli_num_rows($check_course);

    if ($row_count == 1) {
        echo "<script>
    alert('course already exist. please try another one');
    </script>";
    } else {

        $sql = "INSERT INTO courses(name,description) VALUES('$Course','$des')";
        $result = mysqli_query($data, $sql);
        if ($result) {
            echo "<script>
    alert('Data upload success!');
    </script>";
        } else {
            echo "<script>
    alert('Data upload error occured!!!');
    </script>";
        }
    }
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
            position: relative;
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
            margin-top: 1%;
        }

        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .btn {
            box-shadow: inset 0px -3px 7px 0px #29bbff;
            background: linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
            background-color: #2dabf9;
            border-radius: 17px;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: Arial;
            font-size: 15px;
            font-weight: bold;
            padding: 10px 31px;
            text-decoration: none;
            border: none;
            margin-top: 10px;

        }

        .btn:hover {
            background: linear-gradient(to bottom, #0688fa 5%, #2dabf9 100%);
            background-color: #0688fa;
        }

        .btn:active {
            position: relative;
            top: 1px;
        }

        .div_deg {
            background-color: #3498db;
            color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 500px;
            padding: 15px;
           
        }

        label {
            text-align: center;
        }

        .div_deg input[type="text"],
        .div_deg input[type="number"],
        .div_deg input[type="email"],
        .div_deg input[type="password"]
         {
            width:50%;
            padding: 5px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
           
        }

        .div_deg input[type="text"]:focus,
        .div_deg input[type="number"]:focus,
        .div_deg input[type="email"]:focus,
        .div_deg input[type="password"]:focus {
            outline: none;
            box-shadow: 0 0 5px #3498db;
        }

        .div_deg select{
            width: 50%;
            height: 40px;
            border-radius: 5px;
            margin: 20px;
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
    <center>
        <div class="content">
            <h1>Add Courses</h1>
            <div class="div_deg">
                <form action="#" method="POST">
                    <div>
                        <label>Course name</label>
                        <input type="text" name="course" required>
                    </div>
                    <div>
                        <label>Description</label>
                        <input type="text" name="des" required>
                    </div>
                    

                    <div>

                        <input type="submit" class="btn" name="add_course" value="Add">
                    </div>

            </div>
            </form>
    </center>
    </div>






    </div>




</body>

</html>