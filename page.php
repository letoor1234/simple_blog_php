<?php 
  include('php-src/conect.php');  
  $id = $_GET['id'];       
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>    
        <h1>Hola Mundo</h1>
    </header>
    <section id='content'>
        <h2 id='titulo'>
            <?php 
                $consulta= 'SELECT * FROM posteos WHERE id='.$id;
                $result=mysqli_query($conexion, $consulta);
                $row = mysqli_fetch_row($result);
                echo $row[1];
                
            ?> 
        </h2>
        <p id='resumen'>
            <?php 
                echo $row[2];
            ?> 
        </p>
        <p id='contenido'>
            <?php 
                echo $row[3];
            ?>
        </p>
    </section>
    <?php 
          mysqli_close($conexion); 
    ?> 
</body>

</html>