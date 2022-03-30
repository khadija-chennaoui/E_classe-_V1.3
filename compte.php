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
<body>
    <main>
        <form method="POST" style="max-width:480px; " name="form1" onsubmit="verifier(event)" class="container shadow-lg p-4 bg-body rounded ">
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
                <input type="text" class="form-control" name="name" id="n" require>
                <span class="text-danger" id="nameMsg"></span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="prenom" id="pr" require>
                <span class="text-danger" id="last"></span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="e" require>
                <span class="text-danger" id="eml"></span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="p" require>
                <span class="text-danger" id="psl"></span>
            </div>
            <div class="d-grid ">
                <button class="btn btn-info mt-3 mb-3" name="save" style="color:white" type="submit">SIGN UP</button>
            </div>
            <a href="Bootstrap.php" class="stretched-link text-info " style="position: relative;"> Have Account</a>
        </form>
        <?php
        require_once 'connect.php';
        if (isset($_POST['save'])) {
            echo 'saving';
            $name = $_POST['name'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "INSERT INTO `signup` (name, prenom, email, password)
            VALUES('$name', '$prenom', '$email', '$password')";

            if (!mysqli_query($conn, $sql)) {
                die('impossible dajouter cet enregistrement : ');
            }
            //echo "l'engistrement est ajoute";
            header('location: Bootstrap.php');
        }
        ?>
    </main>
    <script>
        function verifier(e) {
            let nam = document.forms['form1']['name'].value;
            let prenom = document.getElementById('pr').value;
            let email = document.getElementById('e').value;
            let password = document.getElementById('p').value;

            if (nam == "") {
                document.getElementById("nameMsg").innerText = "please enter your name ";
                e.preventDefault();
            }
            
            if (prenom == "") {
                document.getElementById("last").innerText = "please enter your last name ";
                e.preventDefault();
            }
            if (email == "") {
                document.getElementById("eml").innerText = "please enter your Email ";
                e.preventDefault();
            }
            if (password == "") {
                document.getElementById("psl").innerText = "please enter your password ";
                e.preventDefault();
            }
    
        }
    </script>
</body>



</html>