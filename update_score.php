<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("Location: index.php");


}

$host = "localhost";
$user = "root";
$password = "";
$db = "school";
$data = mysqli_connect($host, $user, $password, $db);

$sql2 = "SELECT * FROM courses WHERE id IS NOT NULL";
$result2 = mysqli_query($data, $sql2);

$id = $_GET['student_id'];

$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($data, $sql);
$info = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $Course = $_POST['course'];
    $gpa1 = $_POST['gpa1'];
    $gpa2 = $_POST['gpa2'];
    $gpa3 = $_POST['gpa3'];
    $gpa4 = $_POST['gpa4'];

    if ($gpa4 == 0 && $gpa3 == 0 && $gpa2 == 0) {
        $cgpa = $gpa1;
    } elseif ($gpa4 == 0 && $gpa3 == 0) {
        $cgpa = ($gpa1 + $gpa2) / 2;
    } elseif ($gpa4 == 0) {
        $cgpa = ($gpa1 + $gpa2 + $gpa3) / 3;
    } else {
        $cgpa = ($gpa1 + $gpa2 + $gpa3 + $gpa4) / 4;
    }

    $query = "UPDATE user SET username = '$username', email = '$email', password = '$password', phone = '$phone',
    Course = '$Course', gpa1 = '$gpa1', gpa2 = '$gpa2', gpa3 = '$gpa3', gpa4 = '$gpa4', cgpa='$cgpa' WHERE id = '$id' ";

    $result3 = mysqli_query($data, $query);

    if ($result3) {
        header("location:view_student.php");
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
        .div_deg {
            background-color: #3498db;
            color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 500px;
            padding: 15px;

        }


        .div_deg input[type="text"],
        .div_deg input[type="number"],
        .div_deg input[type="email"],
        .div_deg input[type="password"] {
            width: 50%;
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

        .div_deg select {
            width: 50%;
            height: 40px;
            border-radius: 5px;
            margin: 20px;
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
            padding: 10px 21px;
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

        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .content {
            margin-left: 20%;
            margin-top: 5%;
        }

        .table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .table tr {
            background-color: #349eeb;
            color: #ffffff;
            text-align: left;
        }

        .table th,
        .table td {
            padding: 12px 15px;
        }

        .table tr {
            border-bottom: 1px solid #dddddd;
        }

        .table td {
            background-color: #f7f7f7;
            color: black;
            padding: 10px;
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
            <li><a href="show_info.php">view my info</a></li>
            <li><a href="tview_student.php">view students</a></li>
        </ul>
    </aside>
    <div class="content">
        <center>
            <h1>Update Student score</h1>
            <div class="div_deg">
                <form action="#" method="POST">

                    <div>
                        <label>Sem 1 gpa</label>
                        <input type="number" step="any" max="4.4" name="gpa1" value="<?php
                        echo "{$info['gpa1']}"; ?>">
                    </div>
                    <div>
                        <label>Sem 2 gpa</label>
                        <input type="number" step="any" max="4.4" name="gpa2" value="<?php
                        echo "{$info['gpa2']}"; ?>">
                    </div>
                    <div>
                        <label>Sem 3 gpa</label>
                        <input type="number" step="any" max="4.4" name="gpa3" value="<?php
                        echo "{$info['gpa3']}"; ?>">
                    </div>
                    <div>
                        <label>Sem 4 gpa</label>
                        <input type="number" step="any" max="4.4" name="gpa4" value="<?php
                        echo "{$info['gpa4']}"; ?>">
                    </div>

                    <div>
                        <input type="submit" name="update" value="update" class="btn">
                    </div>


            </div>
            </form>
    </div>
    </center>
    </div>




</body>

</html>