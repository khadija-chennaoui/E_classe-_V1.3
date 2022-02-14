<?php
        $username ="root";
        $password = "";
        $host = "localhost";
        $ndb = "e_classe_db";
        $conn=new mysqli($host,$username,$password,$ndb);
        if(!$conn){
                die("Error of connection");
            }
?>
