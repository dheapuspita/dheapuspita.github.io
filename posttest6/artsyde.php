<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../posttest6/artsydestyle.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="icon" href="../posttest6/pic/frame.png">
        <title>ARTSYDE</title>
    </head>
    <body>
        <section class="animat">
            <input type="checkbox" id="check">
            <header>
                <h2><a href="#" class="logo">ARTSY</a></h2>
                <div class="navigation">
                    <a href="#">Home</a>
                    <a href="#">Artist</a>
                    <a href="#">Gallery</a>
                    <a href="#">Exhibitions</a>
                    <a href="../posttest6/aboutme.php">About Me</a>
                </div>
                <img src="../posttest6/pic/black.png" id="icon">
                <label for="check">
                    <i class="fas fa-bars menu-btn"></i>
                    <i class="fas fa-times close-btn"></i>
                </label>
            </header>
                <div class="content">
                    <div class="info">
                        <h2>Art Is Not What You See,<br><span>But What You Make Others See</span></h2>
                        <p>"Showcasing masterpieces of art by the artist from around the world with selection of different sensibilities and taste. Discovered the collection by browsing it just through your devices."</p>
                        <a href="#" class="info-btn">Explore Now</a>
                    </div>
                </div>
                <div>
                    <img src="../posttest6/pic/painting.png" class="feature-img">
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
                icon.src = "../posttest6/pic/yellow.png";
            }else{
                icon.src = "../posttest6/pic/black.png";
            }
        }
    </script>
    </body>
</html>