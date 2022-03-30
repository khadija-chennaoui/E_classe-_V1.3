<?php
// Modification//
include_once('connect.php');
if (isset($_POST['save'])) {
    // INSERT //
    $title = $_POST['title'];
    $prof  = $_POST['prof'];
    $date  = $_POST['date'];
    $query = "INSERT INTO courses values (NULL, '$title','$prof','$date')";
    $res = mysqli_query($conn, $query);
    if ($res)
        header("location:cours.php?added=true");
    else
        echo 'payment not added !';
}
