<!DOCTYPE html>
<!-- 
    https://www.scalablepath.com/front-end/quill-js-wysiwyg-editor 
    https://stackoverflow.com/questions/44467204/how-do-i-post-contents-of-a-quill-editor-in-a-form
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet"> 
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>

</head>
<body>

    

    <form id="FormId" method="POST" action="cadastra_action.php">

        Título: <input type="text" name="titulo" style="width: 100%">

        <br><br>
        <input type="hidden" name="body"/>
        <div id="editor" style="height: 200px"></div>

        <br>
        <input type="submit" value="Enviar">
    </form>

<script>

    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    var form = document.getElementById("FormId");
    form.onsubmit = function() {
        var name = document.querySelector('input[name=body]');
        
        // Pegando em formato JSON
        // name.value = JSON.stringify(quill.getContents());

        // Pegando em formato HTML
        var justHtml = quill.root.innerHTML;
        name.value = justHtml;

        return true; // submit form
    }

</script>

<br><br><a href="index.php">Voltar</a>

</body>
</html>