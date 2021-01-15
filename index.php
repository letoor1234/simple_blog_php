<?php 
    include 'php-src/conect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Hola Mundo</h1>
    </header>
    <input type="radio" name='nav' id='op-nav'>
    <label for="op-nav"></label>
    <nav>
        <input type="radio" name='nav' id=cl-nav>
        <label for="cl-nav">+</label>
        <ul>
            <li>
                <a href="" class='menu-btn'>Destacados</a>
            </li>
            <li>
                <a href="" class='menu-btn'>Recientes</a>
            </li>
            <li>
                <a href="" class='menu-btn'>Sobre mi</a>
            </li>
            <li>
                <a href="" class='menu-btn'>Contacto</a>
            </li>
            <li>
                <form action="php-src/search.php" class='search'>
                    <input type="search" class='menu-inp' placeholder='Buscar...'>
                    <input type="submit" value='OK' class='menu-btn'>
                </form>
                
            </li>
        </ul>
    </nav>
    <ol id='redes'>
        <a href="#">F</a>
        <a href="#">T</a>
        <a href="#">I</a>
        <a href="#">W</a>
    </ol>
    <main>
        <h2 id='seccion'>Destacados</h2>
        <?php
            $dest= 0;
            $consulta= 'SELECT * FROM posteos';
            $result=mysqli_query($conexion, $consulta);
            while($row = mysqli_fetch_row($result)){
                echo"
                    <article>
                        <h2>".$row[1]."</h2>
                        <p>".$row[2]."</p>
                        <a href='page.php?id=".$row[0]."'>Continuar leyendo</a>
                    </article>
                ";
            }
        ?>
        
    </main>
    <footer></footer>
</body>
</html>
<?php
    mysqli_close($conexion);
?>