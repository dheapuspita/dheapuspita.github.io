<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pic/frame.png">
    <link rel="stylesheet" href="styleadd.css"> 
    <title>Catalogue</title>
</head>
    <body>
        <?php 
            if(isset($_POST['proses_tambah'])){
                $title=$_POST['title'];
                $created=$_POST['created'];
                $sa=$_POST['sa'];
                $material=$_POST['material'];
                $image=$_POST['image'];
                $desc=$_POST['desc'];
            
                if($title && $created && $sa && $material && $image && $desc){
                    $sql1 = "insert into catalogue(title, created, sa, material, image, desc) values ('$title', '$created', '$sa', '$material', '$image', '$desc')";
                    $q1 = mysqli_query($connect,$sql1);
                    if($q1){
                        $success = "Catalogue Has Added";
                    }else{
                        $error = "Failed To Added";
                    }
                }
            }
        ?>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>Title Of Art : </td>
                    <td><input type="text" name="title" placeholder="The Title" required></td>
                </tr>
                <tr>
                    <td>Created On : </td>
                    <td><input type="date" name="created" required></td>
                </tr>
                <tr>
                    <td>Style of Art : </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="sa" required> Cubism <br>
                        <input type="radio" name="sa" required> Impressionism <br>
                        <input type="radio" name="sa" required > Realism <br>
                    </td>
                </tr>
                <tr>
                    <td>Paint Material : </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="material" value="oil" required> Oil Paint <br>
                        <input type="checkbox" name="material" value="acr" required> Acrylic Paint <br>
                        <input type="checkbox" name="material" value="wtr" required> Watercolor <br>
                        <input type="checkbox" name="material" value="gou" required> Gouache Paint <br>
                    </td>
                </tr>
                <tr>
                    <td>Painting : </td>
                    <td><input type="file" name="image" accept="image/*" required></td>
                </tr>
                <tr>
                    <td>Description : </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="desc" id="artdesc" cols="20" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="proses_tambah" onclick="Catalogue Has Added">Add</button>
                    </td>
                </tr>
            </table>  
        </form>
    </body>
</html>