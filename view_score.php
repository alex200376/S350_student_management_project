<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['username'])) {
    header("Location:index.php");
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
    <title>view my score</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
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
            text-decoration: none;
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
            
        </ul>
    </aside>
    <div class="content">
        <center>
            <h1>View my score</h1>
            <table class="table">
                <tr>
                    <th>Course name</th>
                    <th>Sem 1 gpa</th>
                    <th>Sem 2 gpa</th>
                    <th>Sem 3 gpa</th>
                    <th>Sem 4 gpa</th>
                    <th>Cgpa</th>
                </tr>
                <?php
                while ($info = $result->fetch_assoc()) {

                ?>
                    <tr>
                        <td>
                            <?php echo "{$info['Course']}"; ?>
                        </td>
                        <td>
                            <?php echo "{$info['gpa1']}"; ?>
                        </td>
                        <td>
                            <?php echo "{$info['gpa2']}"; ?>
                        </td>
                        <td>
                            <?php echo "{$info['gpa3']}"; ?>
                        </td>
                        <td>
                            <?php echo "{$info['gpa4']}"; ?>
                        </td>
                        <td>
                        <?php echo "{$info['cgpa']}"; ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </center>
    </div>




</body>

</html>