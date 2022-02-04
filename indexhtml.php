<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page-1</title>
</head>
<body>
    <div class=" container-fluid" > 
       <div class="row flex-nowrap">
              <?php 
                include('sidebar.php');
              ?>
          </div>
          <div class="col-9 container ">
                  <?php 
                    include('header.php');
                  ?>
                  <div class="row "> 
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                      <div class="col">
                        <div class="card">
                          <div class="card-body " style="background-color: #d8f5ff;">
                            <i class="fal fa-graduation-cap fs-3" style="color: #74C1ED;"></i>
                             <a class="nav-link "style="color: black;" href="#">Students</a>
                            <p class="card-text fw-bold text-end fs-3 mt-3 ms-5">243</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                          <div class="card-body " style="background-color: #fff4fe;">
                            <i class="fal fa-bookmark fs-3 " style="color: #EE95C5;" ></i>  
                              <a class="nav-link mt-0 ml-2 av-item"style="color: black;" href="#">Course</a>
                            <p class="card-text fw-bold mt-3  text-end fs-3" >  13</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                          <div class="card-body " style="background-color:  #ffffd7;">
                            <i class="fal fa-usd-square fs-3" style="color:  #00C1FE;"></i>
                              <a class="nav-link mt-0 ml-2 av-item"style="color: black;" href="#">Payment</a>
                              <p class="card-text fw-bold mt-3  text-end fs-3 text-nowrap">DHS556,00</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                          <div class="card-body " style="background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);">
                            <i class="far fa-user fs-3"style="color:  #FFFFFF;"></i>
                             <a class="nav-link text-white "href="#" >Users</a>
                            <p class="card-text fw-bold mt-3 mx-5 text-end fs-3" >3</p>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
        </div>
    </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>