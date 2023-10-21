<!DOCTYPE html>
<html lang="en">

<head>
    <title>login page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            background-image: url('21421.jpg');
            background-size: cover;
        }

        .form_deg {
            -webkit-box-shadow: 5px 4px 8px 5px rgba(0, 0, 0, 0.58);
            box-shadow: 5px 4px 8px 5px rgba(0, 0, 0, 0.58);
            margin-top: 150px;
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

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            overflow: hidden;
            background: #37517e;
            transition: opacity 0.5s ease;
        }

        #preloader:before {
            content: "";
            position: fixed;
            top: calc(50% - 30px);
            left: calc(50% - 30px);
            border: 6px solid #37517e;
            border-top-color: #fff;
            border-bottom-color: #fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            -webkit-animation: animate-preloader 1s linear infinite;
            animation: animate-preloader 1s linear infinite;
        }

        @-webkit-keyframes animate-preloader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animate-preloader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .schoolname {
            font-size: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 800;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <center>
        <header class="schoolname">The School of Science and Technology</header>
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



    <div id="preloader"></div>




</body>
<script>
   document.addEventListener('DOMContentLoaded', () => {
    let preloader = document.querySelector('#preloader');
    if (preloader) {
      setTimeout(() => {
        preloader.style.opacity = '0'; 
        setTimeout(() => {
          preloader.remove();
        }, 500); 
      }, 1500); 
    }
  });
</script>


</html>