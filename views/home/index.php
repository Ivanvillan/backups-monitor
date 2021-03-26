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
        .modal{ 
            width: 75% !important; 
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
            <div class="col s12 m12 l12 center-align" style="margin-top: 140px;">
                <img class="responsive-img" width="150" height="120" src="../../assets/mark-b.png">
            </div>
        </div>
        <div class="row hide row-clients">
            <a href="#" class="init-show col s1 m1 l1 margin-a" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <h4 class="col s12 m11 l11">CLIENTES</h4>
            <div class="col s12 m5 l5 input-field">
                <input type="text" id="searchClient">
                <label for="searchClient">Buscar...</label>
            </div>
            <div class="col s12 m7 l7">
                <a href="#newClient" class="btn right grey lighten-2 black-text modal-trigger"><i class="material-icons" style="color: #000 !important;">add</i></a>
            </div>
            <div class="col s12 m12 l12">
                <table class="responsive-table highlight client-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Empresa</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Agregar</th>
                            <th>Equipos</th>
                            <th>Registros</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row hide row-registerClient">
            <a href="#" class="show-clients col s1 m1 l1 margin-a" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <h4 class="col s12 m11 l11">Registros de equipos del cliente</h4>
            <div class="col s12 m5 l5 input-field">
                <input type="text" id="searchRegisterClient">
                <label for="searchRegisterClient">Buscar...</label>
            </div>
            <div class="col s12 m12 l12">
                <table class="responsive-table highlight clientRegister-table">
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Nombre PC</th>
                            <th>Ubicación</th>
                            <th>Tipo</th>
                            <th>Detalle</th>
                            <th>Tiempo</th>
                            <th>Fecha</th>
                            <th>Intervalo</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row hide row-triggers">
            <a href="#" class="init-show col s1 m1 l1 margin-a" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
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
                            <th>Descripción</th>
                            <th>Ubicación</th>
                            <th>Tipo</th>
                            <th>Detalle</th>
                            <th>Fecha</th>
                            <th>Duración</th>
                            <th>Intervalo</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <div id="newClient" class="modal">
            <div class="modal-content">
                <div class="row form-newClient">
                    <h5 class="col s10 m10 l10 margin-h5">NUEVO CLIENTE</h5>
                    <a class="col s1 m1 l1 right modal-close margin-a"><i class="material-icons" style="color: #000 !important;">close</i></a>
                    <div class="col s12 m12 l12 divider" style="margin-bottom: 20px !important;"></div>
                    <form action="" id="newClient-form">
                        <div class="input-field col s12 m6 l6">
                            <input type="text" class="validate" id="name-c" name="c-name">
                            <label for="name-c">NOMBRE</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="telfijo-c" class="validate" name="c-surname">
                            <label for="telfijo-c">APELLIDO</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="telmovil-c" class="validate" name="c-businessname">
                            <label for="telmovil-c">EMPRESA</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="domicilio-c" class="validate" name="c-phone">
                            <label for="domicilio-c">TELEFONO</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="correoelectronico-c" class="validate" name="c-email">
                            <label for="correoelectronico-c">CORREO</label>
                        </div>
                        <div class="modal-footer col s12 m6 l6" style="padding-top: 20px !important;">
                            <a href="#!" class="btn right newClient blue darken-4">Aceptar</a>
                            <div class="preloader-wrapper preloader-newClient hide small right active">
                                <div class="spinner-layer spinner-red-only">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div><div class="gap-patch">
                                    <div class="circle"></div>
                                </div><div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="newEquipment" class="modal">
            <div class="modal-content">
                <div class="row form-newEquipment">
                    <h5 class="col s10 m10 l10 margin-h5">NUEVO EQUIPO</h5>
                    <a class="col s1 m1 l1 right modal-close margin-a"><i class="material-icons" style="color: #000 !important;">close</i></a>
                    <div class="col s12 m12 l12 divider" style="margin-bottom: 20px !important;"></div>
                    <form action="" id="newEquipment-form">
                        <div class="input-field col s12 m6 l6">
                            <input type="text" class="validate" id="pcname-e" name="e-pcname">
                            <label for="pcname-e">NOMBRE DE PC</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="description-e" class="validate" name="e-description">
                            <label for="description-e">DESCRIPCION</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="location-e" class="validate" name="e-location">
                            <label for="location-e">UBICACION</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="interval-e" class="validate" name="e-interval">
                            <label for="interval-e">INTERVALO DE HORAS</label>
                        </div>
                        <div class="modal-footer col s12 m12 l12" style="padding-top: 20px !important;">
                            <a href="#!" class="btn right newEquipment blue darken-4">Aceptar</a>
                            <div class="preloader-wrapper preloader-newEquipment hide small right active">
                                <div class="spinner-layer spinner-red-only">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div><div class="gap-patch">
                                    <div class="circle"></div>
                                </div><div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="equipmentClient-modal" class="modal">
            <div class="modal-content">
                <div class="row row-equipmentClient">
                    <h5 class="col s11 m11 l11 margin-h5">REGISTROS DEL CLIENTE</h5>
                    <a class="col s1 m1 l1 right modal-close margin-a"><i class="material-icons" style="color: #000 !important;">close</i></a>
                    <div class="col s12 m12 l12 divider" style="margin-bottom: 20px !important;"></div>
                    <div class="col s12 m12 l12">
                        <table class="highlight responsive-table table-equipmentClient">
                            <thead>
                                <tr>
                                    <th>NOMBRE PC</th>
                                    <th>DESCRIPCION</th>
                                    <th>UBICACION</th>
                                    <th>INTERVALO</th>
                                    <th>REGISTROS</th>
                                    <th>CONFIGURACIÓN</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row hide row-registerEquipmentClient">
                    <a href="#" class="show-equipments col s1 m1 l1 margin-a" style="margin-top: 20px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
                    <h5 class="col s10 m10 l10 margin-h5">REGISTROS DEL EQUIPO</h5>
                    <a class="col s1 m1 l1 right modal-close margin-a"><i class="material-icons" style="color: #000 !important;">close</i></a>
                    <div class="col s12 m12 l12 divider" style="margin-bottom: 20px !important;"></div>
                    <div class="col s12 m12 l12">
                        <table class="highlight responsive-table table-registerEquipmentClient">
                            <thead>
                                <tr>
                                    <th>NOMBRE PC</th>
                                    <th>DESCRIPCION</th>
                                    <th>UBICACION</th>
                                    <th>TIPO</th>
                                    <th>DETALLE</th>
                                    <th>FECHA</th>
                                    <th>INTERVALO</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip-utils/0.1.0/jszip-utils.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js"></script>
<script>
    var paramClient;
    var paramEquipment;
    var nameEquipment;
    $(document).ready(function () {
        getClients();
        searchClient();
        searchRegisterClient();
        searchLastRegister();
        $('.modal').modal();
    });
    $('.clients').click(function (e) { 
        e.preventDefault();
        $('.row-init').addClass('hide');
        $('.row-triggers').addClass('hide');
        $('.row-clients').removeClass('hide');
        $('body').css("background-image", "linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1), rgba(255,255,255,.1))");
    });
    $('.triggers').click(function (e) { 
        e.preventDefault();
        $('.row-init').addClass('hide');
        $('.row-clients').addClass('hide');
        $('.row-triggers').removeClass('hide');
        $('body').css("background-image", "linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1), rgba(255,255,255,.1))");
    });
    $('.show-clients').click(function (e) { 
        e.preventDefault();
        $('.row-init').addClass('hide');
        $('.row-triggers').addClass('hide');
        $('.row-registerClient').addClass('hide');
        $('.row-clients').removeClass('hide');
        $('body').css("background-image", "linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1), rgba(255,255,255,.1))");
    });
    $('.show-equipments').click(function (e) { 
        e.preventDefault();
        $('.row-equipmentClient').removeClass('hide');
        $('.row-registerEquipmentClient').addClass('hide');
    });
    $('.init-show').click(function (e) { 
        e.preventDefault();
        $('.row-init').removeClass('hide');
        $('.row-clients').addClass('hide');
        $('.row-triggers').addClass('hide');
        $('body').css("background-image", "linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1)), url('../../assets/backgound.jpg')");
    });
    function getClients(){
        $.ajax({
            type: "GET",
            url: "http://localhost/backupmonitor-api/public/methods/customers",
            dataType: "json",
                success: function (response) {
                    console.log(response.result);
                    let row = response.result;
                    let html = [];
                    for (let i=0; i < row.length; i++){
                    html.push(
                    `<tr class="content" clientID="${row[i].idclient}">
                    <td>${row[i].name}</td> 
                    <td>${row[i].businessname}</td> 
                    <td>${row[i].phone}</td> 
                    <td>${row[i].email}</td> 
                    <td> <a href="#newEquipment" class="btn modal-trigger grey lighten-2 newEquipments"><i class="material-icons" style="color: #000 !important;">add</i></a></td> 
                    <td><a href="#equipmentClient-modal" class="btn equipmentsClient orange lighten-2 modal-trigger"><i class="material-icons" style="color: #000 !important;">assignment</i></a></td>  
                    <td><a href="#" class="btn registerClient blue lighten-2"><i class="material-icons" style="color: #000 !important;">library_books</i></a></td>  
                    </tr>`
                    );
                }    
                $('.client-table>tbody').html(html.join(''));
                $('.newEquipments').click(function (e) { 
                    e.preventDefault();
                    var element = $(this)[0].parentElement.parentElement;
                    paramClient = $(element).attr('clientID');
                });
                $('.equipmentsClient').click(function (e) { 
                    e.preventDefault();
                    var element = $(this)[0].parentElement.parentElement;
                    paramClient = $(element).attr('clientID');
                    getEquipments();
                });
                $('.registerClient').click(function (e) { 
                    e.preventDefault();
                    $('.row-registerClient').removeClass('hide');
                    $('.row-clients').addClass('hide');
                    var element = $(this)[0].parentElement.parentElement;
                    paramClient = $(element).attr('clientID');
                    getRegisterClients();
                });
            }
        });
    }
    function getEquipments(){
        $.ajax({
            type: "GET",
            url: "http://localhost/backupmonitor-api/public/methods/equipments/" + paramClient,
            dataType: "json",
            success: function (response) {
                console.log(response.result);
                let row = response.result;
                    let html = [];
                    for (let i=0; i < row.length; i++){
                    var interval = row[i].interval_hour;
                    if(interval != null){
                        var intervalNum = interval.split('.')[0] + 'HS.';
                    }else{
                        var intervalNum = 'N/A';
                    }
                    html.push(
                    `<tr class="content" equipmentID="${row[i].idequipment}">
                    <td>${row[i].pcname}</td> 
                    <td>${row[i].descripcion}</td> 
                    <td>${row[i].location}</td> 
                    <td>${intervalNum}</td> 
                    <td><a href="#" class="btn registerEquipments blue lighten-2"><i class="material-icons" style="color: #000 !important;">library_books</i></a></td>  
                    <td><a href="#" class="btn downloadConfig green lighten-2"><i class="material-icons" style="color: #000 !important;">archive</i></a></td>  
                    </tr>`
                    );
                } 
                $('.table-equipmentClient>tbody').html(html.join(''));
                $('.downloadConfig').click(function (e) { 
                    e.preventDefault();
                    var element = $(this)[0].parentElement.parentElement;
                    paramEquipment = $(element).attr('equipmentID');
                    nameEquipment = $(this).parent().parent().find('td').eq(0).html();
                    var initPre = 'backupmonitor.exe /trigger=1 /equipment=';
                    var finalPre = ' /client=';
                    var initPost = 'backupmonitor.exe /trigger=2 /equipment=';
                    var finalPost = ' /client=';
                    var exe = '/assets/docs/BackupMonitor.exe';
                    var ini = '/assets/docs/config.ini';
                    JSZipUtils.getBinaryContent('/backup-monitor/assets/docs/BackupMonitor.zip', function(err, data) {
                    if(err) {
                        throw err; // or handle err
                    }
                    var zip = new JSZip(data);
                    zip.file('pre.bat', initPre + paramEquipment + finalPre + paramClient);
                    zip.file('post.bat', initPost + paramEquipment + finalPost + paramClient);
                    var ini =  `[log_path]\nC:\\Program Files (x86)\\Cobian Backup 11\\Logs\n[server_address]\nlocalhost\\SQLEXPRESS`
                    zip.file("config.ini", ini);
                    var nameFile = 'Config' + ' ' + nameEquipment;
                    var content = zip.generate({type:"blob"});
                    saveAs(content, nameFile);
                    });
                });
                $('.registerEquipments').click(function (e) { 
                    e.preventDefault();
                    $('.row-equipmentClient').addClass('hide');
                    $('.row-registerEquipmentClient').removeClass('hide');
                    var element = $(this)[0].parentElement.parentElement;
                    paramEquipment = $(element).attr('equipmentID');
                    getRegisterEquipment();
                });
            }
        });
    }
    function getRegisterClients(){
        $.ajax({
            type: "GET",
            url: "http://localhost/backupmonitor-api/public/methods/triggersbycustomer/" + paramClient,
            dataType: "json",
                success: function (response) {
                    console.log(response.result);
                    let row = response.result;
                    let html = [];
                    for (let i=0; i < row.length; i++){
                    var interval = row[i].interval_hour;
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
                        var timeNum = time + 's.';
                    }else{
                        var timeNum = '0' + 's.';
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
                    `<tr class="content" equipmentID="${row[i].idequipment}">
                    <td>${row[i].businessname}</td> 
                    <td>${row[i].pcname}</td> 
                    <td>${row[i].location}</td> 
                    <td>${typeNum}</td> 
                    <td>${logNum}</td> 
                    <td>${timeNum}</td> 
                    <td>${createdNum}</td> 
                    <td>${intervalNum}</td> 
                    </tr>`
                    );
                }
                $('.clientRegister-table>tbody').html(html.join(''));
            }
        });
    }
    function getRegisterEquipment(){
        $.ajax({
            type: "GET",
            url: "http://localhost/backupmonitor-api/public/methods/triggersbyid/" + paramEquipment,
            dataType: "json",
            success: function (response) {
                console.log(response.result);
                let row = response.result;
                    let html = [];
                    for (let i=0; i < row.length; i++){
                    var interval = row[i].interval_hour;
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
                    `<tr class="content" equipmentID="${row[i].idequipment}">
                    <td>${row[i].pcname}</td> 
                    <td>${row[i].descripcion}</td> 
                    <td>${row[i].location}</td> 
                    <td>${typeNum}</td> 
                    <td>${logNum}</td> 
                    <td>${createdNum}</td> 
                    <td>${intervalNum}</td> 
                    </tr>`
                    );
                }
                $('.table-registerEquipmentClient>tbody').html(html.join(''));
            }
        });
    }
    function getLastTriggers(){
        $.ajax({
            type: "GET",
            url: "http://localhost/backupmonitor-api/public/methods/triggers",
            dataType: "json",
            success: function (response) {
                let row = response.result;
                    let html = [];
                    for (let i=0; i < row.length; i++){
                    var interval = row[i].interval_hour;
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
                        var timeNum = time + 's.';
                    }else{
                        var timeNum = '0' + 's.';
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
                    <td>${row[i].descripcion}</td> 
                    <td>${row[i].location}</td> 
                    <td>${typeNum}</td> 
                    <td>${logNum}</td> 
                    <td>${createdNum}</td> 
                    <td>${timeNum}</td> 
                    <td>${intervalNum}</td> 
                    </tr>`
                    );
                }
                $('.lastRegister-table>tbody').html(html.join(''));
            }
        });
    }
    $('.lastRegister').click(function (e) { 
        e.preventDefault();
        getLastTriggers();
        setInterval(getLastTriggers(),60000);
    });
    $('.newClient').click(function (e) { 
        e.preventDefault();
        $('.newClient').addClass('hide');
        $('.preloader-newClient').removeClass('hide');
        var name = $("input[name='c-name']").val();
        var surname = $("input[name='c-surname']").val();
        var businessname = $("input[name='c-businessname']").val();
        var phone = $("input[name='c-phone']").val();
        var email = $("input[name='c-email']").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/backupmonitor-api/public/methods/customers/save",
            data: {
                "email": email,
                "businessname": businessname,
                "name": name,
                "surname": surname,
                "phone": phone
            },
            dataType: "json",
            success: function (response) {
                $('.newClient').removeClass('hide');
                $('.preloader-newClient').addClass('hide');
                M.toast({html: '¡Cliente creado!'});
                $('#newClient-form').trigger('reset');
                getClients();
            },
            error: function(){
                M.toast({html: 'Error al crear cliente'});
                $('.newClient').removeClass('hide');
                $('.preloader-newClient').addClass('hide');
            }
        });
    });
    $('.newEquipment').click(function (e) { 
        e.preventDefault();
        $('.newEquipment').addClass('hide');
        $('.preloader-newEquipment').removeClass('hide');
        var descripcion = $("input[name='e-description']").val();
        var pcname = $("input[name='e-pcname']").val();
        var location = $("input[name='e-location']").val();
        var idclient = paramClient;
        var interval_hour = $("input[name='e-interval']").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/backupmonitor-api/public/methods/equipments/save",
            data: {
                "descripcion": descripcion,
                "pcname": pcname,
                "location": location,
                "idclient": idclient,
                "interval_hour": interval_hour
            },
            dataType: "json",
            success: function (response) {
                $('.newEquipment').removeClass('hide');
                $('.preloader-newEquipment').addClass('hide');
                M.toast({html: '¡Equipo creado!'});
                $('#newEquipment-form').trigger('reset');
                getClients();
            },
            error: function(){
                M.toast({html: 'Error al crear equipo'});
                $('.newEquipment').removeClass('hide');
                $('.preloader-newEquipment').addClass('hide');
            }
        });
    });
    function searchClient(){
        $("#searchClient").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".content").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }
    function searchRegisterClient(){
        $("#searchRegisterClient").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".content").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }
    function searchLastRegister(){
        $("#searchLastRegister").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".content").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }
</script>
</body>
</html>