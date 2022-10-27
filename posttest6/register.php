<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../posttest6/reglogstyle.css">
        <link rel="icon" href="../posttest6/pic/frame.png">
        <title>Register</title>
    </head>
    <body>
        <?php 
            if(isset($_POST['proses_regis'])){
                $first=$_POST['first'];
                $last=$_POST['last'];
                $ages=$_POST['ages'];
                $gd=$_POST['gd'];
                $mail=$_POST['mail'];
                $pass=$_POST['pass'];
                header("location:login.php");
            }
            else{
        ?>
        <form method="post" action="">
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="first" maxlength=15 required></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="last" maxlength="15" required></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="number" name="ages" maxlength="2" min="13" required></td>
                </tr>
                <tr>
                    <td>Gender : </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="radio" name="gd" required> Male <br>
                        <input type="radio" name="gd" required> Female
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="mail" maxlength="30" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" maxlength="15" required></td>
                </tr>
                <tr>
                    <td colspan="9"><button type="submit" name="proses_regis">Register Now</button>
                        <p class="register-login" align="center">Have an account?
                        <a href="login.php">Login</a>
                        </p>
                    </td>
                </tr>
            </table>
        </form>
        <?php 
            }
        ?>
    </body>
</html>