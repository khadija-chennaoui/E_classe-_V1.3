
<div class="col-3 col-md-3 col-xl-2 px-sm-2 px-0 " style="background-color: #ffffbe;width: 20%;">
                <div class="d-flex flex-column align-items-center  px-3 pt-2 text-white min-vh-100">
                 <div class="text-center" >
                       <span class="me-3 d-sm-inline">
                            <div class="total d-flex d-grid ">  
                                <span class="pt-4 pb-2 mx-2 mb-3 bodr d-none  d-md-inline "> </span> 
                                <h1 class=" mb-2  py-1 fw-bold d-none  d-md-inline text-black  text-nowrap">E-classe</h1>
                         </div></span>
                        <div  class="d-grid ">
                            <img src="https://picsum.photos/150.jpg" class="rounded-circle  ms-3  mb-2 img-fluid d-none text-center  d-md-inline "  alt="...">
                            <h2 class="text-center  d-none  d-md-inline  text-black text-nowrap">
                                <?php
                                    echo $_SESSION['name'];
                                ?>
                            </h2>
                            <p class="text-center  img-fluid  d-none  d-md-inline fs-4 text-nowrap" style="color: darkturquoise;">Admin</p>
                         </div>
                    </div>
                    <style >
                        li:hover {
                            background-color: #0dcaf0;
                            padding : 0px 15px 0px 15px;
                            border-radius:8px;
                        }
                        li{
                            padding : 0px 15px 0px 15px;
                            border-radius:8px;
                        }
                        </style>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-md-start "id="menu">
                        <li class='mx-auto px-3 <?php if(basename($_SERVER['REQUEST_URI']) == 'indexhtml.php') echo 'bg-info'; ?>'>
                            <a href="indexhtml.php" class="nav-link px-0 align-middle text-black  text-nowrap" >
                            <i class=" fs-4 far fa-home "></i></i><span class=" d-none d-md-inline ms-4">Home</span> </a>
                        </li>
                        <li class='mx-auto <?php if(basename($_SERVER['REQUEST_URI']) == 'cours.php') echo 'bg-info'; ?>'>
                            <a href="cours.php" class="nav-link px-0 text-black">
                                <i class="fs-4 bi-people" ><i class="fal fa-file-chart-line"></i></i><span class=" d-none d-md-inline ms-4">Course</span> </a>
                        </li>
                        <li class='mx-auto <?php if(basename($_SERVER['REQUEST_URI']) == 'student.php') echo 'bg-info'; ?>'>
                            <a href="student.php" class="nav-link px-0 text-black text-nowrap" >
                                <i class="fs-4 bi-people"><i class="fal fa-graduation-cap"></i></i><span class="ms-1 d-none  d-md-inline"> Students</span> </a>
                        </li>
                        <li class='mx-auto <?php if(basename($_SERVER['REQUEST_URI']) == 'payment.php') echo 'bg-info'; ?>'>
                            <a href="payment.php" class="nav-link px-0 text-black text-nowrap" >
                                <i class="fs-4 bi-people"><i class="fal fa-usd-square" ></i></i><span class="ms-1 d-none  d-md-inline ms-1 "> Payments</span> </a>
                        </li>
                        <li class='mx-auto'>
                            <a href="#" class="nav-link px-0 text-black" >
                                <i class="fs-4 bi-people"><i class="fal fa-file-chart-line"></i></i><span class=" d-none d-md-inline  ms-4">Report</span> </a>
                        </li>
                        <li class='mx-auto'>
                            <a href="#" class="nav-link px-0 text-black">
                                <i class="fs-4 bi-people"><i class="far fa-sliders-v-square"></i></i><span class="ms-1 d-none  d-md-inline  ms-3">Settings</span> </a>
                        </li>
                        <li class='mt-4 mx-auto'>
                            <a href="Bootstrap_deconection.php" class="nav-link px-0 align-middle text-black">
                                 <span class=" d-none  d-md-inline"> Logout </span> 
                                 <i class="fs-4 bi-people"><i class="fal fa-sign-out-alt"></i></i></a>
                        </li>
                    </ul>
                </div>
            





