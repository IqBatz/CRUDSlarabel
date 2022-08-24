<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia 23/08/2022</title>
</head>
<body style="background-color: #390353;color:#eaeaea;">
    <h1 style="text-align:center;">HOLA YA CASI SE HACER UN CRUD</h1>
    <br><br><br>

    <form action="{{route('post.store')}}" method = "post">
        @csrf 




        <div class="row cenTer">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="/Assets/Images/book-1.png" alt="" width="75">
            <p class="Titulo3"><strong>Formación centrada en el Estudiante</strong></p>
            <p class="Texto4columnas">Contribuimos al desarrollo de la dignidad humana, del patrimonio cultural nacional y universal mediante la enseñanza y la investigación.</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="/Assets/Images/woman.png" alt="" width="75">
            <p class="Titulo3"><strong>Formación con compromiso y ética</strong></p>
            <p class="Texto4columnas">Formamos personas comprometidas con el país y capaces de asumir un compromiso ético.</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="/Assets/Images/support.png" alt="" width="75">
            <p class="Titulo3"><strong>Profesionales Competentes</strong></p>
            <p class="Texto4columnas">Procuramos orientar su acción hacia sectores populares y de bajos ingresos de modo prioritario, con el fin de formarlos como profesionales competentes y capaces de insertarse en el mercado laboral.</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="/Assets/Images/team-management.png" alt="" width="75">
            <p class="Titulo3"><strong>Enseñanza con Calidad</strong></p>
            <p class="Texto4columnas">Desarrollamos carreras en el campo humanístico, de ciencias sociales y tecnológicas; procurando una enseñanza con calidad y una investigación pertinente, científica y social.</p>
          </div>
        </div>
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="background-color:red;">
                <label for="">Titulo</label>
                <input type="text" name="title" style="color:red;">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <label for="">URL Corto</label>
                <input type="text" name="slug">
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <label for="">Contenido</label>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <label for="">Descripcion</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>
            
        </div>

        <div class="row">

        </div>
    <button type = "submit">Enviar</button>
    </form>
</body>
</html>