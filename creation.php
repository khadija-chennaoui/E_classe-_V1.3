<?php
require_once 'connect.php';
if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "INSERT INTO `signup` (name, prenom, email, password)
    VALUES('$name', '$prenom', '$email', '$password')";
  echo "l'engistrement est ajoute";
  if (!mysqli_query($conn, $sql)) {
    die('impossible dajouter cet enregistrement : ');
  }
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>creation</title>
</head>
<body style=" background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(180,192,218,1) 0%, rgba(210,242,255,1) 2%, rgba(84,215,242,1) 36%, rgba(255,255,165,1) 100%, rgba(234,234,148,1) 100%);">
  <form class="row g-4" class="container" method="POST" name="form1" style="max-width:600px;margin:auto;background:white; border-radius: 5%;">
    <h1 class=" mb-3 py-4 my-4 fw-bold" style="color: blue;">E-classe</h1>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">First Name</label>
      <input type="text" class="form-control" id="inputName" name="name">
      <div id="displayError"></div>
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" name="prenom">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password">
    </div>
    <div class="col-12">
    </div>
    <div class="col-12">
      <button id="submit" type="submit" onclick=" testvalide() ;" class="btn btn-primary mb-5 mt-4" name="save">Sign in</button>
    </div>
  </form>
</body>
<script>
  function testvalide() {
    if (document.form1.name.value == "" || document.form1.prenom.value == "" || document.form1.email.value == "" || document.form1.password.value == "") {
     alert("remplire les champs");
    }
  }
</script>
<!----------<script>
    const sub = document.getElementById("submit");
    let input = document.getElementById("inputName");
    let error = document.getElementById("displayError");


    sub.addEventListener('click',(e)=>{
      if(input.value===""){
          e.preventDefault();
          error.innerText = "name is required";
      }else if(input.value!= "khadija"){
          e.preventDefault();
          error.innerText = "name is incorrect";
      }
    })
    
</script>--->

</html>