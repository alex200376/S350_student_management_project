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

if (isset($_POST['add_teacher'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $usertype = "teacher";
    $check = "SELECT * FROM user WHERE username ='$username'";

    $check_user = mysqli_query($data, $check);

    $row_count = mysqli_num_rows($check_user);

    if ($row_count == 1) {
        echo "<script>
    alert('Username already exist. please try another one');
    </script>";
    } else {

        $sql = "INSERT INTO user(username,email,phone,usertype,password) VALUES('$username',
    '$email','$phone','$usertype','$password')";
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
            background-color: lightskyblue;
            width: 400px;
            padding: 20px;
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
            <h1>Add teacher</h1>
            <div class="div_deg">
                <form action="#" method="POST">
                    <div>
                        <label>Usernmae</label>
                        <input type="text" name="name" required>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="text" name="email" required>
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="number" name="phone" required>
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="text" name="password" required>
                    </div>
                    <div>

                        <input type="submit" class="btn" name="add_teacher" value="Add">
                    </div>

            </div>
            </form>
    </center>
    </div>






    </div>




</body>

</html>