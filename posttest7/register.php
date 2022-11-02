<?php
    include "connect.php";
    error_reporting(0);
    session_start();
    if(isset($_SESSION["mail"])){
        header("location:../posttest7/login.php");
    }
    if(isset($_POST['proses_regis'])){
        $as=$_POST['as'];
        $first=$_POST['first'];
        $last=$_POST['last'];
        $user=$_POST['user'];
        $ages=$_POST['ages'];
        $gd=$_POST['gd'];
        $mail=$_POST['mail'];
        $pass=md5($_POST['pass']);
        $cpass=md5($_POST['cpass']);
        if($pass == $cpass{$sql="SELECT * FROM users WHERE as='$as' AND mail='$mail' OR  user='$user'";
        $result=mysqli_query($conn,$sql);

        if(!result->num_rows>0){$sql="INSERT INTO users ('as','user','mail','pass')";
        $result=mysqli_query($conn,$sql)
        if($result){
            echo "
            <script>
                alert("Successful To Registered")
            </script>";

            $as="";
            $user="";
            $mail="";
            $pass="";
            $_POST['pass']="";
            $_POST['cpass']="";}
        else{
            echo "
            <script>
                alert("Failed To Registered")
            </script>";
        }
        else{
            echo "
            <script>
                alert("Username / Email Already Exist")
            </script>";
        }
        else{
            echo "
            <script>
                alert("Password Not Matched")
            </script>"; 
        }}}
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../posttest7/reglogstyle.css">
        <link rel="icon" href="../posttest7/pic/frame.png">
        <title>Register</title>
    </head>
    <body>
        <form method="post" action="">
            <table>
                <tr>
                    <td>Login As</td>
                    <td>
                        <select name="as">
                            <option value="artist">Artist</option>
                            <option value="us">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="first" maxlength=15 required></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="last" maxlength="15" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="user" maxlength="10" required></td>
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
                    <td>Confirm Password</td>
                    <td><input type="password" name="cpass" maxlength="15" required></td>
                </tr>
                <tr>
                    <td colspan="9"><button type="submit" name="proses_regis">Register Now</button>
                        <p class="register-login" align="center">Have an account?
                        <a href="../posttest7/login.php">Login</a>
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>