<?php
    include ('connect.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id = $id";
    $res = mysqli_query($conn, $sql);
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
    <h2 class="text-center mt-5 text-primary">ADD NEW STUDENT</h2>
    <form class="container mt-5" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" value="<?php echo $updat['name'] ; ?>"  name="name" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" value="<?php echo $updat['email'] ; ?>"  name="email" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="numbe" class="form-control" value="<?php echo $updat['phone'] ; ?>" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enroll Number</label>
            <input type="numbe" class="form-control" value="<?php echo $updat['enroll_number'] ; ?>" name="enroll_number"required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date of admission</label>
            <input type="date" class="form-control" value="<?php echo $updat['date_of_admission'] ; ?>" name="date_of_admission" required>
        </div>               
        <button type="submit" class="btn btn-primary" id="botn" name="submit" placeholde="save">Submit</button>
        <br>  
    </form>
    <?php
    if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Enroll= $_POST['enroll_number'];
        $Date = $_POST['date_of_admission'];
        $query = "UPDATE students set id = $id , name='$Name',email='$Email',phone='$Phone',enroll_number='$Enroll',date_of_admission='$Date' where id='$id'";
        $res=mysqli_query($conn,$query);
        echo '
            <script>
                window.location.href = "student.php";
            </script>
        ';
        mysqli_close($conn,$query);
    }
?>
</body>
</html>