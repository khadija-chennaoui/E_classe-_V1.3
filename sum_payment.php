<?php
include('connect.php');
$query = "SELECT SUM(amount) AS 'total' FROM payment_details";
$res = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($res);
echo $data['total'];


//deuxiems méthode : //
/*$stud= "SELECT * From payment_details" ;
$query= mysqli_query($conn,$stud);
$payment = 0;
while($result=mysqli_fetch_assoc($query)){
$payment = $payment + $result['amount'];
}
echo $payment;*/
