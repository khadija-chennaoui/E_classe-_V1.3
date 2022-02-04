<?php
 include('connect.php');
 
  $id=$_GET['id'];
  $sql="DELETE FROM students where id='$id'";
  $query= mysqli_query($conn,$sql);
 if(isset($query)){
   header("location:student.php");//header c'est pour chenger entre les pages//
  }
 ?>

