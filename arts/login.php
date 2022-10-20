<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="reglogstyle.css">
        <link rel="icon" href="pic/frame.png">
        <title>Login</title>
    </head>
    <body>
        <?php 
            if(isset($_POST['proses_login'])){
                $as=$_POST['as'];
                $mail=$_POST['mail'];
                $pass=$_POST['pass'];

                if($as=='artist'){
                    header("location:artistside.php");
                }
                elseif($as!=='artist'){
                    header("location:artsyde.php");
                }
                else{ 
                    echo "
                    <script>
                        alert('Password or Email is wrong');
                        window.location.href='login.php';
                    </script>
                    ";
                }
            }
             else{
        ?>
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
                    <td>Email</td>
                    <td><input type="email" name="mail" maxlength="30" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" maxlength="15" required></td>
                </tr>
                <tr>
                    <td colspan="5"><button type="submit" name="proses_login">Login</button>
                        <p class="login-register" align="center">Don't have an account?
                        <a href="register.php">Register Now</a>
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