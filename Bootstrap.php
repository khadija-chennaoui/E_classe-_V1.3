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
  <main class="my-5">
    <form method="POST" class="container" style="max-width:480px;margin:auto;" class="shadow-lg p-4 mb-5 mt-5 bg-body rounded ">
      <div class="total align-items-center d-flex ps-4">
        <span class="pt-4 pb-2 my-4 mx-2 mb-3 bodr"> </span>
        <h1 class=" mb-3 py-4 my-4 fw-bold">E-classe</h1>
      </div>
      <div class="text-center">
        <div>
          <h2 class="h3 mb-4 font-weight-normal">SIGN IN</h2>
          <p>Enter your credentials to access your account</p>
        </div>
      </div>
      <?php if (isset($_GET['incorrect'])) { ?>
        <p class="text-dark border border-2 border-danger pt-1 pb-2 text-center bg-warning bar"><?php echo $_GET['incorrect']; ?></p>
      <?php } ?>
      

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="pass" placeholder="Enter your passeword">
      </div>
      <div class="d-grid ">
        <button class="btn btn-info" name="submit" style="color:white" type="submit">SIGN IN</button>
      </div>
      <div class="text-center mt-4 pb-5">
        <span>Forgot your password?</span><a href="#" class="stretched-link text-info" style="position: relative;"> Reset Password</a>
      </div>
    </form>
    <?php
    include('connect.php');
    if (isset($_POST['submit'])) {
      $session_duration_minutes=60*24;
      $email = $_POST['email'];
      $password = $_POST['password'];
      $query = "SELECT * FROM comptes WHERE email= '" . $email . "' AND password='" . $password . "'";
      $res = mysqli_query($conn, $query);
      $compte = mysqli_fetch_assoc($res);
      if ($compte) {
        session_start();
        $_SESSION['name'] = $compte['name'];
        $_SESSION['email'] = $compte['email'];
        $_SESSION['password'] = $compte['password'];
        setcookie('email' , $_SESSION['email'] , time() + $session_duration_minutes*60 , null , null , false , true);
        setcookie('password' , $_SESSION['password'] , time()+  $session_duration_minutes*60 , null , null , false , true);
        header("location:indexhtml.php");
      } else {
        header("location:Bootstrap.php?incorrect=email or passeword is inccorect!");
      }
    }  
    ?>
  </main>
</body>
</html>