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
    <?php
    // Modification//
    include_once('connect.php');
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    ?>
        <form class="container mt-5" action="add_student.php " method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input type="tel" class="form-control" required name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enroll Number</label>
                <input type="number" class="form-control" required name="enroll_number">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Date of admission</label>
                <input type="date" class="form-control" required name="date_of_admission">
            </div>
            <button type="submit" class="btn btn-primary" id="botn" name="submit" placeholde="save">
                Submit
            </button>
            <br>
            <li class='mx-auto nav-link '>
                <a href="student.php" class="text-reset">
                    <i class="fs-4 bi-people"><i class="fal fa-graduation-cap"></i></i></a>
            </li>
        </form>
    <?php
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        print_r($_POST);
        // INSERT //
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Enroll = $_POST['enroll_number'];
        $Date = $_POST['date_of_admission'];
        $query = "INSERT INTO students(name,email,phone,enroll_number,date_of_admission)values('$Name','$Email',' $Phone',' $Enroll','$Date')";
        $res = mysqli_query($conn, $query);
        if ($res)
            header("location:student.php");
        else
            echo 'student not added !';
    }
    ?>
</body>

</html>