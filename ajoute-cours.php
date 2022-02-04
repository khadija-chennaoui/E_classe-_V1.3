<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Mysql</title>
</head>
<?php 
  // Modification//
   include_once('connect.php');
   if($_SERVER['REQUEST_METHOD']=='GET'){
 ?>
<body>
 <h2 class="text-center mt-5 text-primary">ADD NEW  COURSES </h2>
            <form class="container mt-5" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1"action="ajoute-cours.php "  class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prof</label>
                    <input type="text" class="form-control" name="prof" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" required>
                </div>
                <input type="submit" type="submit" class="btn btn-primary" name="submit" placeholde="save">    
            </form>
            <?php
                }elseif($_SERVER['REQUEST_METHOD']=='POST'){    
                            // INSERT //
                            $title = $_POST['title'];
                            $prof  = $_POST['prof'];
                            $bill  = $_POST['date'];
                            $query = "INSERT INTO courses (title, prof, date) values ('$title','$prof',' $date')";
                            $res=mysqli_query($conn,$query);
                            if($res)
                                header("location:cours.php");
                            else 
                                echo 'payment not added !';
                }
            ?>
</body>
</html>