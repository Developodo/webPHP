<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Procesando...</title>
</head>
<body>
  <?php
    print_r($_POST);
    //print_r($_GET);

    $hostname="localhost";
    $username="test";
    $password="";
    $db="ejemploPHP";

    $conn=new mysqli($hostname,$username,$password,$db);

    if($conn->connect_error){
        echo "ERROR: "+$conn->connect_error;
        die("Error conexión: "+$conn->connect_error);
    }

    if($_POST['action']=='insert'){
        $sql="INSERT INTO notas (title,body) VALUES ('".$_POST['title']."','".$_POST['body']."')";
        if($conn->query($sql)){
            echo "Nota insertada";
        }else{
            echo "Error insertando la nota";
        }
    }
  ?>
    <p>
        <a href="index.php">Volver al inicio</a>
    </p>
    <script>
        (()=>{
           setTimeout(() => {
               window.location.replace("index.php");
           }, 8000);
        })();
    </script>
</body>
</html>