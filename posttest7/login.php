<?php
    include "connect.php";
    error_reporting(0);
    session_start();
    if(isset($_SESSION["user"])){
        header("location:../posttest7/artsyde.php");
    }
    if(isset($_POST['proses_login'])){
        $as=$_POST['as'];
        $user=$_POST['user'];
        $mail=$_POST['mail'];
        $pass=md5($_POST['pass']);
        $sql="SELECT * FROM users WHERE as='$as' AND 'user='$user' AND mail='$mail'";
        $result=mysqli_query($conn,$sql);

        if(!result->num_rows>0){
            $row=mysqli_fetch_assoc($result);
            $_SESSION['as']=$row['artist'];
            header("location:../posttest7/artistside.php")
        }
        elseif(!result->num_rows>0){
            $row=mysqli_fetch_assoc($result);
            $_SESSION['as']=$row['us'];
            header("location:../posttest7/artsyde.php")
        }
        else{
            echo "
            <script>
                alert("Username / Email / Password Is Wrong")
            </script>";
        }
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
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="">
            <table>
                <tr>
                    <center><h1>LOGIN</h1></center>
                </tr>
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
                    <td>Username</td>
                    <td><input type="text" name="user" maxlength="10" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="mail" maxlength="30" value="<?php echo $mail;?>" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" maxlength="15" value="<?php echo $_POST['pass'];?>" required></td>
                </tr>
                <tr>
                    <td colspan="5"><button type="submit" name="proses_login">Login</button>
                        <p class="login-register" align="center">Don't have an account?
                        <a href="../posttest7/register.php">Register Now</a>
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>