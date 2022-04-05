<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>

    </style>
</head>
<body>
    <div class="container">
       <header style="">Nueva Nota</header>
       <form action="save.php" method="post" onsubmit="return validate()">
            <input type="hidden" name="action" value="insert"/>
           <p>
               <label>Título: </label>
               <input type="text" name="title" id="title" value="" placeholder="Máximo 200 carácteres"></input>
           </p>
           <p>
            <label>Cuerpo: </label>
            <input type="text" name="body" id="body" value="" placeholder=""></input>
        </p>
        <p>
            <input type="submit"  value="Guardar" ></input>
        </p>
       </form>
    </div>
    <?php require("list.php"); ?>
</body>
</html>