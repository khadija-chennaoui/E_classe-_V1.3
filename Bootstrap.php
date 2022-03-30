<?php
  if (isset($_COOKIE['email']) && isset($_COOKIE['password'])){
      header("location:indexhtml.php");
  }
  include('connect.php');
    if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $query = "SELECT * FROM signup WHERE email= '" . $email . "' AND password='" . $password . "'";
      $res = mysqli_query($conn, $query);
      if (mysqli_num_rows($res)) {
        $compte = mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['name'] = $compte['name'];
        $_SESSION['email'] = $compte['email'];
        $_SESSION['password'] = $compte['password'];
        if(isset($_POST['re_me'])){
          setcookie('email', $_SESSION['email'] , time() + 60*60*24);
          setcookie('password', $_SESSION['password'], time() + 60*60*24);
        }else{
          setcookie('email', $_SESSION['email'] , time() + 30);
          setcookie('password', $_SESSION['password'], time() + 30);
        }
        header("location:indexhtml.php");
      } else {
        echo'failed ';
        header("location:Bootstrap.php?incorrect=email or passeword is inccorect!");
      }
    }
?>
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
  <main class="my-5">
    <form method="POST" style="max-width:480px;margin:auto;" class="container shadow-lg p-3  bg-body rounded ">
    <div class="total align-items-center d-flex ps-4">
                <h1 class=" mb-3 ps-2 fw-bold border-start border-info border-5">E-classe</h1>
            </div>
      <div class="text-center">
        <div>
          <h2 class="h3 mb-3 font-weight-normal">SIGN IN</h2>
          <p>Enter your credentials to access your account</p>
        </div>
      </div>
      <?php if (isset($_GET['incorrect'])) { ?>
        <p class="text-dark border border-2 border-danger pt-1 pb-2 text-center bg-warning bar"><?php echo $_GET['incorrect']; ?></p>
      <?php } ?>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" require value="<?php if (isset($_COOKIE["email"])) echo $_COOKIE["email"] ?>" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="pass"  require value="<?php if (isset($_COOKIE["password"])) echo $_COOKIE["password"] ?>" placeholder="Enter your password">
      </div>
      <div>
        <input type="checkbox" name="re_me" class="mt-2">
        <label class="mb-3" for="re_me">Remember me</label>
      </div>
      <div class="d-grid ">
        <button class="btn btn-info" name="submit" style="color:white" type="submit">SIGN IN</button>
      </div>
      <div class="text-center mt-4 pb-4">
        <span>Forgot your password?</span><a href="#" class="stretched-link text-info" style="position: relative;"> Reset Password</a>
      </div>
      <tr>------------------------------Where--------------------------------</tr>
      <div class="text-center mt-4 ">
      <a href="compte.php"><button type="button" class="btn btn-outline-success mb-3">Create new account</button></a>
      </div>
    </form>
    <?php
    ?>
  </main>
</body>

</html>