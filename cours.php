<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styl.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Page-1</title>
</head>

<body>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD NEW COURSES </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h2 class="text-center mt-5 text-primary">ADD NEW COURSES </h2>
          <form class="container mt-5" method="POST" action="./ajoute-cours.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" action="ajoute-cours.php " class="form-label">Title</label>
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

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name='save' value="save" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <div class=" container-fluid bg-light">
    <div class="row flex-nowrap">
      <?php
      include('sidebar.php');
      ?>
    </div>
    <div class="col-9 container">
      <?php
      include('header.php');
      ?>
      <div class="row">
        <div class="container">
          <div class="d-flex justify-content-between bd-highlight mb-3 border-2 border-highlight border-bottom align-items-center">
            <h3 class="ms-4">Cours List</h3>
            <div class="p-2 bd-highlight d-flex align-items-center">
              <i class="fal fa-sort me-3 fs-5 text-info"></i>
              <!-- <a type="button" class="btn btn-info btn-sm text-white" href="ajoute-cours.php">ADD NEW COURS</a> -->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ADD NEW COURS
              </button>
              <!-- Modal -->

            </div>
          </div>
          <?php
          if (isset($_GET['added'])) {
            echo '<div class="alert alert-primary" role="alert">
            Course was added!
          </div>';
          }
          ?>
          <div class="table-responsive px-4">
            <table class="table table-borderless align-middle" style="border-collapse:separate;border-spacing:0 15px;">
              <thead>
                <tr style="color:#ACACAC;font-size:12px;">
                  <td>Title</td>
                  <td>Prof</td>
                  <td>Date</td>
                  <td> </td>
                  <td> </td>
                </tr>
              </thead>
              <?php
              include('connect.php');
              $requete = "SELECT * FROM courses order by id desc"; //order-by-ID-desc:pour afficher les donner par oredre descendent//
              $query = mysqli_query($conn, $requete);
              while ($rows = mysqli_fetch_assoc($query)) {
                $id = $rows['id'];
                echo ' <tr class="bg-white">
                    <td class="text-nowrap">' . $rows['title'] . '</td>
                    <td class="text-nowrap">' . $rows['prof'] . '</td>
                    <td class="text-nowrap">' . $rows['date'] . '</td> 
                    <td><a class="fal fa-pen fs-5"style="color:#00C1FE;" href=edit-cours.php?id=' . $id . '></a></td>
                    <td><a class="far fa-trash fs-5" style="color:#00C1FE;" href=delete-cours.php?id=' . $id . '></a></td> 
                </tr>';
              }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>