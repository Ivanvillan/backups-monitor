<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup Monitor | Registros</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <!-- ULTIMOS REGISTROS GENERALES -->
        <div class="row row-triggers">
            <a href="#" class="back-init col s1 m1 l1 margin-a" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <h4 class="col s12 m11 l11">LISTA DE REGISTROS</h4>
            <div class="col s12 m5 l5 input-field">
                <input type="text" id="searchLastRegister">
                <label for="searchLastRegister">Buscar...</label>
            </div>
            <div class="col s12 m12 l12">
                <table class="responsive-table highlight lastRegister-table">
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Equipo</th>
                            <th>Ubicación</th>
                            <th>Tipo</th>
                            <th>Detalle</th>
                            <th>Fecha</th>
                            <th>Intervalo</th>
                            <th>Transcurrido</th>
                            <th>Tarea</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        // FUNCIONES INICIALES
        $(document).ready(function () {
            searchLastRegister();
            // LA FUNCION SE EJECUTA AUTOMATICAMENTE CADA 1 MINUTO
            setInterval(getLastTriggers(),60000);
        });
        // 
        // MANEJO DE VISTAS
        $('.back-init').click(function (e) { 
            e.preventDefault();
            window.location.href = '../home/index.php';
            $('body').css("background-image", "linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1)), url('../../assets/backgound.jpg')");
        });
        // 
        // FUNCION PARA TRAER LOS ULTIMOS REGISTROS
        function getLastTriggers(){
            $.ajax({
                type: "GET",
                url: "http://localhost/backupmonitor-api/public/methods/triggers",
                dataType: "json",
                success: function (response) {
                    console.log(response.result);
                    let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        var interval = row[i].interval_time;
                        if(interval != null){
                            var intervalNum = interval.split('.')[0] + 'HS.';
                        }else{
                            var intervalNum = 'N/A';
                        }
                        var created = row[i].created;
                        if(created != null){
                            var createdNum = created.split('.')[0];
                        }else{
                            var createdNum = 'N/A';
                        }
                        var time = row[i].tiempo;
                        if(time != null){
                            var timeNum = time + 'HS.';
                        }else{
                            var timeNum = '0' + 'HS.';
                        }
                        var log = row[i].text_log;
                        if(log == ''){
                            var logNum = 'TAREA COMPLETA';
                        }else if (log == null){
                            var logNum = 'N/A';
                        }else{
                            var logNum = '';
                        }
                        var type = row[i].type;
                        if(type != null){
                            var typeNum = type;
                        }else{
                            var typeNum = 'N/A';
                        }
                        html.push(
                        `<tr class="content">
                        <td>${row[i].businessname}</td> 
                        <td>${row[i].pcname}</td> 
                        <td>${row[i].location}</td> 
                        <td>${typeNum}</td> 
                        <td>${logNum}</td> 
                        <td>${createdNum}</td> 
                        <td>${intervalNum}</td> 
                        <td>${timeNum}</td> 
                        <td>${row[i].tName}</td> 
                        </tr>`
                        );
                    }
                    $('.lastRegister-table>tbody').html(html.join(''));
                }
            });
        }
        // 
        // BUSCADOR
        function searchLastRegister(){
            $("#searchLastRegister").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".content").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        }
        // 
    </script>
</body>
</html>