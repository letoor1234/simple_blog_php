<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>    
        <h1>Crea contenido</h1>
    </header>
    <main>
        <form action="../php-src/send.php" method="POST">
            <label for="title">Titulo</label>
            <input type="text" name='title' id='title' placeholder='Aquí va el título...'>

            <label for="resume">Resumen</label>
            <textarea onkeypress="addEnter('resume', event)" name="resume" id="resume" cols="30" rows="10" placeholder='Aquí va el resumen que se mostrará en el inicio. 200 carácteres máximo' onclick="contenido('resume')"onKeyDown="valida_longitud(200, 'resume')" onKeyUp="valida_longitud(200, 'resume')"></textarea>

            <label for="dest" id='dest-l'>Destacado</label>
            <input type="checkbox" name='dest' id='dest'>

            <label for="content" >Contenido</label>
            <section class='cont-edit'>
                <button type='button' onclick='addTag("<h3>", "</h3>")' id='large'><h3>L</h3></button>

                <button type='button' onclick='addTag("<small>", "</small>")' id='small'><small>s</small> </button>

                <button type='button' onclick='addTag("<b>", "</b>")' id='bold'><b>B</b></button>

                <button type='button' onclick='addTag("<i>", "</i>")' id='italic'><i>i</i></button>

                <button type='button' onclick='addTag("<u>", "</u>")' id='underline'><u>u</u></button>

                <button type='button' onclick='addTag("<s>", "</s>")' id='overline'><s>ov</s></button>

                <button type='button' onclick='' id='link'>url</button>
            </section>
            <textarea onkeypress="addEnter('content', event)" name="content" id="content" cols="30" rows="30" placeholder='Y aquí va el contenido del post' onclick="contenido('content')"onKeyDown="valida_longitud(15999999, 'content')" onKeyUp="valida_longitud(15999999, 'content')"></textarea>
            <ol id='form-send'>
                <li><button>↑</button></li>
                <li><input type="submit" value='OK'></li>
            </ol>
        </form>      
    </main>
    <script src='../js/validate-form.js'></script> 
    <script src='../js/edit-content.js'></script>
</body>
</html>