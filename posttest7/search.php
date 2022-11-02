<?php
    include "connect.php";
?>
<?php
    $keyword = $_GET['keyword'];
    echo $keyword;

    if(isset($_POST['proses_login'])){
        $alldata = array();
        $get_data = $connect->query("SELECT * FROM catalogue WHERE title LIKE '%$keyword%'");
        echo "<pre>";
        print_r ($all_data);
        echo "<pre>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" href="../posttest7/pic/frame.png">
    <title>Searching</title>
</head>
<body>
    <section class="animat">
        <input type="checkbox" id="check">
            <header>
                <h2><a href="#" class="logo">ARTSY</a></h2>
                <a href="../posttest7/logout.php">Log Out</a>
                <div class="navigation">
                    <a href="#">Home</a>
                    <a href="#">Artist</a>
                    <a href="#">Gallery</a>
                    <a href="#">Exhibitions</a>
                    <a href="../posttest7/aboutme.php">About Me</a>
                </div>
                <img src="../posttest7/pic/black.png" id="icon">
                <label for="check">
                    <i class="fas fa-bars menu-btn"></i>
                    <i class="fas fa-times close-btn"></i>
                </label>
                <form action="search.php" method="get" class="navbar-form navbar-right">
                    <input type="text" class="form-control" name="keyword">
                    <button class="btn btn-primary">Search</button>
                </form>
            </header>
                <div class="container">
                    <h3>Catalogue Found : <?php echo $keyword ?></h3>

                    <?php if(empty($alldata)):
                        echo "
                        <script>
                        alert("Username / Email / Password Is Wrong")
                        </script>";
                    ?>
                </div>           
            <footer>
                <div class="social-media">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </footer>
          </section>
        <script>
            var icon = document.getElementById("icon");
            icon.onclick = function(){
                document.body.classList.toggle("dark");
                if(document.body.classList.contains("dark")){
                    icon.src = "../posttest7/pic/yellow.png";
                }else{
                    icon.src = "../posttest7/pic/black.png";
                }
            }
        </script>
    </body>
</html>