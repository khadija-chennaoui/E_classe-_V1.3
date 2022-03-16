<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bootstrap</title>
</head>

<body style="overflow: hidden;">
    <main>
        <form method="POST" style="max-width:480px;" name="form1" class="container shadow-lg p-4 bg-body rounded">
            <div class="total align-items-center d-flex ps-4">
                <h1 class=" mb-3 ps-2 fw-bold border-start border-info border-5">E-classe</h1>
            </div>
            <div class="text-center">
                <div>
                    <h2 class="h3 mb-3 font-weight-normal">SIGN UP</h2>
                    <p>Create New Account</p>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">First Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="d-grid ">
                <button class="btn btn-info mt-4" name="save" style="color:white" onclick="testvalide()" type="submit">SIGN IN</button>
            </div>
        </form>
        <?php
        require_once 'connect.php';

        if(isset($_POST['save'])){
          $name = $_POST['name'];
          $prenom = $_POST['prenom'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $sql = "INSERT INTO `signup` (name, prenom, email, password)
          VALUES('$name', '$prenom', '$email', '$password')";
          if(!mysqli_query($conn, $sql)){
            die('impossible dajouter cet enregistrement : ');
          }
          echo "l'engistrement est ajoute";
         // header('location: Bootstrap.php');
        }
        ?>
    </main>
</body>
<script>
    function testvalide() {
        if (document.form1.name.value == "" || document.form1.prenom.value == "" || document.form1.email.value == "" || document.form1.password.value == "") {
            alert("remplire les champs");
        }
    }
</script>

</html>