<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primer CRUD</title>
</head>
<body>
    <h1>HOLA YA CASI SE HACER UN CRUD</h1>
    <br><br><br>

    <form action="{{route('post.store')}}" method = "post">
        @csrf 
        <label for="">Titulo</label>
        <input type="text" name="title">
        <label for="">URL Corto</label>
        <input type="text" name="slug">
        <label for="">Contenido</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <label for="">Descripcion</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    <button type = "submit">Enviar</button>
    </form>
</body>
</html>