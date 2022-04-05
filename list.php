<?php
    $hostname="localhost";
    $username="test";
    $password="";
    $db="ejemploPHP";

    $conn=new mysqli($hostname,$username,$password,$db);

    if($conn->connect_error){
        echo "ERROR: "+$conn->connect_error;
        die("Error conexión: "+$conn->connect_error);
    }
    $sql="SELECT * FROM notas";
    $result=$conn->query($sql);

    while($row=mysqli_fetch_assoc($result)){
        print_r($row);
    }

  ?>