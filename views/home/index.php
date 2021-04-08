<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup Monitor | Inicio</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body{
            background: linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1)), url('../../assets/backgound.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row row-init">
            <div class="col s12 m12 l12 center-align" style="margin-top: 100px;">
                <img class="responsive-img" width="400" height="250" src="../../assets/r0bab.png"> 
            </div>
            <div class="col s12 m12 l12 center-align" style="margin-top: 80px;">
                <a href="#" class="btn waves-effect waves-light black clients" style="width: 350px;">Administrar Clientes Y Equipos</a>
            </div>
            <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
                <a href="#" class="btn waves-effect lastRegister waves-light black triggers" style="width: 350px;">Listado de Registros</a>
            </div>
            <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
                <a href="#" class="btn waves-effect dashboard waves-light black triggers" style="width: 350px;">Dashboard</a>
            </div>
            <div class="col s12 m12 l12 center-align" style="margin-top: 140px;">
                <img class="responsive-img" width="150" height="120" src="../../assets/mark-b.png">
            </div>
        </div>
        <!--  -->
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    // MANEJO DE VISTAS
    $('.clients').click(function (e) { 
        e.preventDefault();
        window.location.href = '../home/management.php';
        $('body').css("background-image", "linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1), rgba(255,255,255,.1))");
    });
    $('.triggers').click(function (e) { 
        e.preventDefault();
        window.location.href = '../home/triggers.php';
        $('body').css("background-image", "linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1), rgba(255,255,255,.1))");
    });
    $('.dashboard').click(function (e) { 
        e.preventDefault();
        window.location.href = '../home/dashboard.php';
    });
    // 
</script>
</body>
</html>