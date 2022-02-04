<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Mysql</title>
</head>
<?php 
  // Modification//
   include_once('connect.php');
   if($_SERVER['REQUEST_METHOD']=='GET'){
   
 ?>
<body>
 <h2 class="text-center mt-5 text-primary">ADD NEW STUDENT</h2>
            <form class="container mt-5" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control"  name="name" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Payment Schedule</label>
                    <input type="text" class="form-control"   name="payment" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bill Number</label>
                    <input type="number" class="form-control"required name="bill">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Amount Paid</label>
                    <input type="number" class="form-control" required name="amount">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Balance Amount</label>
                    <input type="number" class="form-control"  required name="balance">
                </div>     
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date</label>
                    <input type="date" class="form-control"  required name="date">
                </div>           
                <input type="submit" type="submit" class="btn btn-primary"  name="submit" placeholde="save">    
                
            </form>

            <?php
                }elseif($_SERVER['REQUEST_METHOD']=='POST'){
                        
                            // INSERT //
                            $name    = $_POST['name'];
                            $payment = $_POST['payment'];
                            $bill    = $_POST['bill'];
                            $amount  = $_POST['amount'];
                            $balance = $_POST['balance'];
                            $date    = $_POST['date'];
                            $query = "INSERT INTO payment_details (name, payment, bill, amount, balance, date) values ('$name',' $payment ',' $bill','$amount','$balance', '$date')";
                            $res=mysqli_query($conn,$query);
                            if($res)
                                header("location:payment.php");
                            else 
                                echo 'payment not added !';

                    
                }
            ?>
</body>
</html>