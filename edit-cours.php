<?php
    include ('connect.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM courses WHERE id = $id";
    $res = mysqli_query($conn,$sql);
    $updat = mysqli_fetch_assoc($res);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Mysql</title>
</head>
<body>
<h2 class="text-center mt-5 text-primary">ADD NEW  COURSES </h2>
            <form class="container mt-5" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" value="<?php echo $updat['title'] ; ?>" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"  >Prof</label>
                    <input type="text" class="form-control" value="<?php echo $updat['prof'] ; ?>"  name="prof" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date</label>
                    <input type="date" class="form-control"value="<?php echo $updat['date'] ; ?>" name="date" required>
                </div>
                <button type="submit" class="btn btn-primary" id="botn" name="submit" placeholde="save">
                   Submit     
              </button>    
            </form>
    <?php
     if(isset($_POST['submit'])){
        $title = $_POST['title']; 
        $prof  = $_POST['prof'];
        $date  = $_POST['date'];
        $query = "UPDATE courses set title='$title', prof='$prof',date='$date'  WHERE 'id'='$id'";
        $res=mysqli_query($conn,$query);
        echo '
            <script>
                window.location.href = "cours.php";
            </script>
        ';
        mysqli_close($conn,$query);
     }
   ?>
</body>
</html>