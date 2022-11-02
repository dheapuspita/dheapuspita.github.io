<?php
    include "connect.php";
    error_reporting(0);
    session_start();
    if(isset($_SESSION["user"])){
        header("location:../posttest7/artistside.php");
    }

    $title = "";
    $created = "";
    $sa = "";
    $material = "";
    $image = "";
    $desc = "";

    if(isset($_GET['op'])){
        $op=$_GET['op'];
    } else{
        $op="";
    }
    if($op == 'delete'){
        $title=$_GET['title'];
        $sql1="delete from catalogue where title = '$title'";
        $q1=mysqli_query($connection,$sql1);
        if($q1){
            $success="Data Successfuly To Delete";
        } else{
            $error="Data Failed To Delete";
        }
    }
    if($op == 'edit'){
        $title=$_GET['title'];
        $sql1="select * from catalogue where title = '$title'";
        $q1=mysqli_query($connection,$sql1);
        $r1=mysqli_fetch_array($q1);
        $title=$r1['title'];
        $created=$r1['created'];
        $sa=$r1['sa'];
        $material=$r1['material'];
        $image=$r1['image'];
        $desc=$r1['desc'];

        if($title == ''){
            $error = "Data Not Found";
        }
    }

    if(isset($_POST['proses_tambah'])){
        $title=$_POST['title'];
        $created=$_POST['created'];
        $sa=$_POST['sa'];
        $material=$_POST['material'];
        $image=$_POST['image'];
        $desc=$_POST['desc'];
    
        if($title && $created && $sa && $material && $image && $desc){
            if($op == 'edit'){
                $sql1="update catalogue set title = '$title',created='$created',sa='$sa',material='$material',image='$image',desc='$desc' where title = '$title'";
                $q1=mysqli_query(&connection,$sql1);
                if($q1){
                    $success="Data Successfuly To Update";
                } else{
                    $error="Data Failed To Update";
                }
            } else{
                    $sql1 = "insert into catalogue(title, created, sa, material, image, desc) values ('$title', '$created', '$sa', '$material', '$image', '$desc')";
                    $q1 = mysqli_query($connect,$sql1);
                if($q1){
                    $success = "Catalogue Has Added";
                }else{
                    $error = "Failed To Added";
                }
            }
        } else{
            $error = "Please Fill All The Data";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../posttest7/pic/frame.png">
    <link rel="stylesheet" href="../posttest7/styleadd.css"> 
    <title>Catalogue</title>
</head>
    <body>
        <form method="POST" action="" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Title Of Art : </td>
                    <td><input type="text" name="title" maxlength="35" required></td>
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
                        <textarea name="desc" id="artdesc" maxlength="200" cols="20" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="proses_tambah" value="Add" class="btn btn-primary"/>
                        <?php
                            date_default_timezone_set("Asia/Samarinda");
                            echo date(Y-m-d h:i:sa);
                        ?>
                    </td>
                </tr>
            </table>  
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title Of Art</th>
                    <th scope="col">Created On</th>
                    <th scope="col">Style of Art</th>
                    <th scope="col">Paint Material</th>
                    <th scope="col">Painting</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
                <tbody>
                    <?php
                        $sql2="select * from catalogue order by title asc";
                        $q2=mysqli_query($connection,$sql2);
                        $list=1;
                        while($r2 = mysqli_fetch_array($q2)){
                            $title=$r2['title'];
                            $created=$r2['created'];
                            $sa=$r2['sa'];
                            $material=$r2['material'];
                            $image=$r2['image'];
                            $desc=$r2['desc'];
                    ?>
                            <tr>
                                <th scope="row"><?php echo $list++ ?></th>
                                <td scope="row"><?php echo $title ?></td>
                                <td scope="row"><?php echo $created ?></td>
                                <td scope="row"><?php echo $sa ?></td>
                                <td scope="row"><?php echo $material ?></td>
                                <td scope="row"><?php echo $image ?></td>
                                <td scope="row"><?php echo $desc ?></td>
                                <td scope="row">
                                    <a href="adds.php?op=edit&title=<?php echo $title ?>"><button type="button" class="btn btn-edit">Edit</button></a>
                                    <a href="adds.php?op=delete&title=<?php echo $title ?>" onclick="return confirm('Sure To Delete This Data?')"><button type="button" class="btn btn-delete">Delete</button></a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </thead>
        </table>
    </body>
</html>