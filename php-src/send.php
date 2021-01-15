<?php
    include 'conect.php';

    $title= $_POST['title'];
    $resume= $_POST['resume'];
    $content= $_POST['content'];

    $in='INSERT INTO posteos (id, title, resumen, content, destacado) VALUES (NULL,"'. $title.'","'.$resume.'", "'.$content.'", 1)';
    $result= mysqli_query($conexion, $in);

    if($result){
        header('Location: ../index.php');
    }else{
        echo "Error: " . $in . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
?>
