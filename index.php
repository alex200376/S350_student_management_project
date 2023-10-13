<!DOCTYPE html>
<html lang="en">

<head>
    <title>login page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-image: url('21421.jpg');
            background-size: cover;
        }

        .form_deg {
            -webkit-box-shadow: 5px 4px 8px 5px rgba(0, 0, 0, 0.58);
            box-shadow: 5px 4px 8px 5px rgba(0, 0, 0, 0.58);
            margin-top: 200px;
            padding: 20px;
            background-color: #ffffff;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form_deg form {
            display: flex;
            flex-direction: column;
        }

        .form_deg label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form_deg input[type="text"],
        .form_deg input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .form_deg input[type="submit"] {
            background-color: #008b2a;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form_deg input[type="submit"]:hover {
            background-color: #42ee4b;
        }
    </style>
</head>

<body>
    <center>

        <div class="form_deg">
            <form action="login_check.php" method="POST">
                <h1>Login</h1>
                <div>
                    <label>Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label>Password</label>
                    <input type="Password" name="password">
                </div>
                <div>
                    <input type="submit" name="submit" value="Login">
                </div>
                <h4>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginMessage'];
                    ?>
                </h4>
            

            </form>
        </div>
    </center>



    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">

    </footer>



</body>

</html>