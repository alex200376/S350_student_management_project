<!DOCTYPE html>
<html lang="en">

<head>
    <title>login page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            overflow: auto;
            background: linear-gradient(315deg, rgba(101, 0, 94, 1) 3%, rgba(60, 132, 206, 1) 38%, rgba(48, 238, 226, 1) 68%, rgba(255, 25, 25, 1) 98%);
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
            font-family: Sans-serif;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 0%;
            }

            50% {
                background-position: 100% 100%;
            }

            100% {
                background-position: 0% 0%;
            }
        }

        .wave {
            background: rgb(255 255 255 / 25%);
            border-radius: 1000% 1000% 0 0;
            position: fixed;
            width: 200%;
            height: 12em;
            animation: wave 10s -3s linear infinite;
            transform: translate3d(0, 0, 0);
            opacity: 0.8;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .wave:nth-of-type(2) {
            bottom: -1.25em;
            animation: wave 18s linear reverse infinite;
            opacity: 0.8;
        }

        .wave:nth-of-type(3) {
            bottom: -2.5em;
            animation: wave 20s -1s reverse infinite;
            opacity: 0.9;
        }

        @keyframes wave {
            2% {
                transform: translateX(1);
            }

            25% {
                transform: translateX(-25%);
            }

            50% {
                transform: translateX(-50%);
            }

            75% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(1);
            }
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
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>

            </form>
        </div>
    </center>



    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">

    </footer>



</body>

</html>