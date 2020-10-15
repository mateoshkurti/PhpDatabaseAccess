<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login - User Registration and Login using PHP</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
             body
            {
                background-color: lightblue;
            }
            #header
            {
                background-color: lightgrey;
                display: flex;
                justify-content: space-between;
                justify-content: space-around;
            }
            #wrapper
            {
                width:70%;
                margin:auto;
            }

            table, td, th
            {    
                border: 1px solid #ddd;
                text-align: left;
            }

            table
            {
                border-collapse: collapse;
                width: 40%;
                margin: auto;
            }

            th, td
            {
                padding: 15px;
            }

            h2
            {
                text-align: center;
            }

            #msg
            {
                width:40%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">

               <h1>Assignment_4 Mateo Shkurti</h1>

            <div id="header">
            <a href="index.php">Home</a> | 
            <a href="register.php">Register</a> | 
            <a href="login.php">Login</a>
            </div>
            <hr>
            
            <h2>Login</h2>

            <form action="login1.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required autofocus></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>

            <?php
                if(isset($_REQUEST['result']))
                {
                    
                    
                    if($_REQUEST['result']=="fail")
                    {
                        echo "Something went wrong! "
                        . "Please check your username and password";
                    }
                    if($_REQUEST['result']=="exit")
                    {
                        echo "Something went wrong! ";
                    }
                }
            ?>
        </div>
    </body>
</html>
