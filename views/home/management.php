<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup Monitor | Gestion</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .modal{ 
            width: 75% !important; 
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- LISTA DE LOS CLIENTES -->
        <div class="row row-clients">
            <a href="#" class="init-show col s1 m1 l1 margin-a" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <h4 class="col s12 m11 l11">CLIENTES</h4>
            <div class="col s12 m5 l5 input-field">
                <input type="text" id="searchClient">
                <label for="searchClient">Buscar...</label>
            </div>
            <div class="col s12 m7 l7">
                <a href="#newClient" class="btn right grey lighten-5 modal-trigger"><i class="material-icons" style="color: #000 !important;">add</i></a>
            </div>
            <div class="col s12 m12 l12">
                <table class="responsive-table highlight client-table">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>EMPRESA</th>
                            <th>TELEFONO</th>
                            <th>CORREO</th>
                            <th>EDITAR CLIENTE</th>
                            <th>EQUIPOS</th>
                            <th>AGREGAR EQUIPO</th>
                            <th>REGISTROS</th>
                        </tr>
                    </thead>
                    <tbody>
    
                    </tbody>
                </table>
            </div>
        </div>
        <!--  -->
        <!-- LISTA DE REGISTROS DE LOS EQUIPOS DE LOS CLIENTES -->
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
        <!--  -->
        <!-- NUEVO CLIENTE -->
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
                            <input type="text" id="surname-c" class="validate" name="c-surname">
                            <label for="surname-c">APELLIDO</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="businessname-c" class="validate" name="c-businessname">
                            <label for="businessname-c">EMPRESA</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="phone-c" class="validate" name="c-phone">
                            <label for="phone-c">TELEFONO</label>
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
        <!--  -->
        <!-- EDITAR CLIENTE -->
        <div id="editClient" class="modal">
            <div class="modal-content">
                <div class="row form-editClient">
                    <h5 class="col s10 m10 l10 margin-h5">EDITAR CLIENTE</h5>
                    <a class="col s1 m1 l1 right modal-close margin-a"><i class="material-icons" style="color: #000 !important;">close</i></a>
                    <div class="col s12 m12 l12 divider" style="margin-bottom: 20px !important;"></div>
                    <form action="" id="editClient-form">
                        <div class="input-field col s12 m6 l6">
                            <input type="text" class="validate" id="name-ec" name="ec-name">
                            <label for="name-ec">NOMBRE</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="surname-ec" class="validate" name="ec-surname">
                            <label for="surname-ec">APELLIDO</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="busissname-ec" class="validate" name="ec-businessname">
                            <label for="busissname-ec">EMPRESA</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="phone-ec" class="validate" name="ec-phone">
                            <label for="phone-ec">TELEFONO</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="correoelectronico-ec" class="validate" name="ec-email">
                            <label for="correoelectronico-c">CORREO</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <select name="" id="ec-state">
                                <option value="" disabled selected>ESTADO</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                        <div class="modal-footer col s12 m12 l12" style="padding-top: 20px !important;">
                            <a href="#!" class="btn right editClient blue darken-4">Aceptar</a>
                            <div class="preloader-wrapper preloader-editClient hide small right active">
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
        <!--  -->
        <!-- CREAR EQUIPO -->
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
        <!--  -->
        <!-- LISTA DE LOS REGISTROS DE LOS CLIENTES -->
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
                                    <th>EDITAR EQUIPO</th>
                                    <th>TAREAS</th>
                                    <th>AGREGAR TAREA</th>
                                    <th>REGISTROS</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--  -->
                <!-- LISTA DE LOS REGISTROS DE LOS EQUIPOS-->
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
                <!--  -->
                <!-- LISTA DE TAREAS -->
                <div class="row hide row-taskList">
                    <a href="#" class="hide-taskList col s1 m1 l1 margin-a" style="margin-top: 20px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
                    <h5 class="col s10 m10 l10 margin-h5">LISTA DE TAREAS</h5>
                    <a class="col s1 m1 l1 right modal-close margin-a"><i class="material-icons" style="color: #000 !important;">close</i></a>
                    <div class="col s12 m12 l12 divider" style="margin-bottom: 20px !important;"></div>
                    <div class="col s12 m12 l12">
                    <div class="col s12 m12 l12">
                        <a href="#" id="exe" class="btn right grey lighten-5 tooltipped" data-position="left" data-tooltip="Aplicativo"><i class="material-icons" style="color: #000;">apps</i></a>
                    </div>
                        <table class="highlight responsive-table table-taskList">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>TIPO</th>
                                    <th>COMPRESION</th>
                                    <th>INTERVALO</th>
                                    <th>INFORMACION ADICIONAL</th>
                                    <th>EDITAR</th>
                                    <th>EJECUTABLES</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--  -->
                <!-- CREAR TAREA -->
                <div class="row hide form-addTask">
                    <a href="#" class="hide-task col s1 m1 l1 margin-a" style="margin-top: 20px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
                    <h5 class="col s10 m10 l10 margin-h5">NUEVA TAREA</h5>
                    <a class="col s1 m1 l1 right modal-close margin-a"><i class="material-icons" style="color: #000 !important;">close</i></a>
                    <div class="col s12 m12 l12 divider" style="margin-bottom: 20px !important;"></div>
                    <form action="" id="newTask-form">
                        <div class="input-field col s12 m6 l6">
                            <input type="text" class="validate" id="name-t" name="t-name">
                            <label for="name-t">NOMBRE DE TAREA</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <select name="" id="t-type">
                                <option value="" disabled selected>TIPO DE TAREA</option>
                                <option value="3">Incremental</option>
                                <option value="1">Completa</option>
                                <option value="2">Diferencial</option>
                                <option value="4">Tarea Vacía</option>
                            </select>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <select name="" id="t-compression">
                                <option value="" disabled selected>COMPRESION</option>
                                <option value="1">Sin Compresión</option>
                                <option value="2">Zip</option>
                                <option value="3">7Zip</option>
                            </select>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="interval-t" class="validate" name="t-interval">
                            <label for="interval-t">INTERVALO DE HORAS</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="info-t" class="validate" name="t-info">
                            <label for="info-t">INFORMACION ADICIONAL</label>
                        </div>
                        <div class="modal-footer col s12 m6 l6" style="padding-top: 20px !important;">
                            <a href="#!" class="btn right newTask blue darken-4">Aceptar</a>
                            <div class="preloader-wrapper preloader-newTask hide small right active">
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
                <!--  -->
                <!-- EDITAR TAREA -->
                <div class="row hide form-editTask">
                    <a href="#" class="hide-edittask col s1 m1 l1 margin-a" style="margin-top: 20px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
                    <h5 class="col s10 m10 l10 margin-h5">EDITAR TAREA</h5>
                    <a class="col s1 m1 l1 right modal-close margin-a"><i class="material-icons" style="color: #000 !important;">close</i></a>
                    <div class="col s12 m12 l12 divider" style="margin-bottom: 20px !important;"></div>
                    <form action="" id="editTask-form">
                        <div class="input-field col s12 m6 l6">
                            <input type="text" class="validate" id="name-et" name="et-name">
                            <label for="name-et">NOMBRE DE TAREA</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <select name="" id="et-type">
                                <option value="" disabled selected>TIPO DE TAREA</option>
                                <option value="3">Incremental</option>
                                <option value="1">Completa</option>
                                <option value="2">Diferencial</option>
                                <option value="4">Tarea Vacía</option>
                            </select>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <select name="" id="et-compression">
                                <option value="" disabled selected>COMPRESION</option>
                                <option value="1">Sin Compresión</option>
                                <option value="2">Zip</option>
                                <option value="3">7Zip</option>
                            </select>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="interval-et" class="validate" name="et-interval">
                            <label for="interval-et">INTERVALO DE HORAS</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="info-et" class="validate" name="et-info">
                            <label for="info-et">INFORMACION ADICIONAL</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <select name="" id="et-state">
                                <option value="" disabled selected>ESTADO</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                        <div class="modal-footer col s12 m12 l12" style="padding-top: 20px !important;">
                            <a href="#!" class="btn right editTask blue darken-4">Aceptar</a>
                            <div class="preloader-wrapper preloader-editTask hide small right active">
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
                <!--  -->
                <!-- EDITAR EQUIPO -->
                <div class="row hide form-editEquipment">
                    <a href="#" class="back-equipmentsList col s1 m1 l1 margin-a" style="margin-top: 20px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
                    <h5 class="col s10 m10 l10 margin-h5">EDITAR EQUIPO</h5>
                    <a class="col s1 m1 l1 right modal-close margin-a"><i class="material-icons" style="color: #000 !important;">close</i></a>
                    <div class="col s12 m12 l12 divider" style="margin-bottom: 20px !important;"></div>
                    <form action="" id="editEquipment-form">
                        <div class="input-field col s12 m6 l6">
                            <input type="text" class="validate" id="pcname-ee" name="ee-pcname">
                            <label for="pcname-ee">NOMBRE DE PC</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="description-ee" class="validate" name="ee-description">
                            <label for="description-ee">DESCRIPCION</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="location-ee" class="validate" name="ee-location">
                            <label for="location-ee">UBICACION</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <select name="" id="ee-state">
                                <option value="" disabled selected>ESTADO</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                        <div class="modal-footer col s12 m12 l12" style="padding-top: 20px !important;">
                            <a href="#!" class="btn right editEquipment blue darken-4">Aceptar</a>
                            <div class="preloader-wrapper preloader-editEquipment hide small right active">
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
                <!--  -->
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip-utils/0.1.0/jszip-utils.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js"></script>
    <script>
        // VARIABLES DE ENTORNO
        var paramClient;
        var paramEquipment;
        var paramTask;
        var nameEquipment;
        var selectedType;
        var editSelectedCompression;
        var editSelectedType;
        var taskState;
        var clientState;
        var equipmentState;
        // 
        // FUNCIONES INICIALES
        $(document).ready(function () {
            getClients();
            searchClient();
            searchRegisterClient();
            $('.modal').modal();
            $("#t-type").change(function(){
                selectedType = $(this).children("option:selected").val();
                console.log(selectedType);
            });
            $("#t-compression").change(function(){
                selectedCompression = $(this).children("option:selected").val();
                console.log(selectedCompression);
            });
            $("#et-type").change(function(){
                editSelectedType = $(this).children("option:selected").val();
                console.log(editSelectedType);
            });
            $("#et-compression").change(function(){
                editSelectedCompression = $(this).children("option:selected").val();
                console.log(editSelectedCompression);
            });
            $("#ec-state").change(function(){
                clientState = $(this).children("option:selected").val();
                console.log(clientState);
            });
            $("#ee-state").change(function(){
                equipmentState = $(this).children("option:selected").val();
                console.log(equipmentState);
            });
            $("#et-state").change(function(){
                taskState = $(this).children("option:selected").val();
                console.log(taskState);
            });
        });
        // MANEJO DE VISTAS
        $('.show-clients').click(function (e) { 
            e.preventDefault();
            window.location.href = '../home/management.php';
            $('body').css("background-image", "linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1), rgba(255,255,255,.1))");
        });
        $('.show-equipments').click(function (e) { 
            e.preventDefault();
            $('.row-equipmentClient').removeClass('hide');
            $('.row-registerEquipmentClient').addClass('hide');
        });
        $('.init-show').click(function (e) { 
            e.preventDefault();
            window.location.href = '../home/index.php';
            $('body').css("background-image", "linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1)), url('../../assets/backgound.jpg')");
        });
        // FUNCION PARA TRAER TODOS LOS CLIENTES
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
                        <td> <a href="#editClient" class="btn modal-trigger blue-grey lighten-5 modalEditClient"><i class="material-icons" style="color: #000 !important;">edit</i></a></td> 
                        <td><a href="#equipmentClient-modal" class="btn equipmentsClient blue-grey lighten-5 modal-trigger"><i class="material-icons" style="color: #000 !important;">assignment</i></a></td>  
                        <td> <a href="#newEquipment" class="btn modal-trigger blue-grey lighten-5 newEquipments"><i class="material-icons" style="color: #000 !important;">add</i></a></td> 
                        <td><a href="#" class="btn registerClient blue-grey lighten-5"><i class="material-icons" style="color: #000 !important;">library_books</i></a></td>  
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
                    $('.modalEditClient').click(function (e) { 
                        e.preventDefault();
                        var name = $(this).parent().parent().find('td').eq(0).html();
                        var element = $(this)[0].parentElement.parentElement;
                        paramClient = $(element).attr('clientID');
                        $.ajax({
                            type: "GET",
                            url: "http://localhost/backupmonitor-api/public/methods/customers/" + name,
                            dataType: "json",
                            success: function (response) {
                                var data = response.result;
                                console.log(data);
                                $('input[name="ec-name"]').val(data[0].name);
                                $('input[name="ec-surname"]').val(data[0].surname);
                                $('input[name="ec-businessname"]').val(data[0].businessname);
                                $('input[name="ec-phone"]').val(data[0].phone);
                                $('input[name="ec-email"]').val(data[0].email);
                                clientState = data[0].enabled;
                                M.updateTextFields();
                                $('select').formSelect();
                            }
                        });
                    });
                }
            });
        }
        // 
        // FUNCION PARA TRAER TODOS LOS EQUIPOS
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
                        html.push(
                        `<tr class="content" equipmentID="${row[i].idequipment}">
                        <td>${row[i].pcname}</td> 
                        <td>${row[i].description}</td> 
                        <td>${row[i].location}</td> 
                        <td><a href="#" class="btn showEditEquipment blue-grey lighten-5"><i class="material-icons" style="color: #000 !important;">edit</i></a></td>  
                        <td><a href="#" class="btn blue-grey lighten-5 taskList"><i class="material-icons" style="color: #000 !important;">assignment</i></a></td>  
                        <td><a href="#" class="btn blue-grey lighten-5 add-task"><i class="material-icons" style="color: #000 !important;">add</i></a></td>  
                        <td><a href="#" class="btn registerEquipments blue-grey lighten-5"><i class="material-icons" style="color: #000 !important;">library_books</i></a></td>  
                        </tr>`
                        );
                    } 
                    $('.table-equipmentClient>tbody').html(html.join(''));
                    $('.add-task').click(function (e) { 
                        e.preventDefault();
                        $('.row-equipmentClient').addClass('hide');
                        $('.row-registerEquipmentClient').addClass('hide');
                        $('.form-addTask').removeClass('hide');
                        var element = $(this)[0].parentElement.parentElement;
                        paramEquipment = $(element).attr('equipmentID');
                        $('select').formSelect();
                    });
                    $('.hide-task').click(function (e) { 
                        e.preventDefault();
                        $('.row-equipmentClient').removeClass('hide');
                        $('.row-registerEquipmentClient').addClass('hide');
                        $('.form-addTask').addClass('hide');
                    });
                    $('.taskList').click(function (e) { 
                        e.preventDefault();
                        $('.row-equipmentClient').addClass('hide');
                        $('.row-registerEquipmentClient').addClass('hide');
                        $('.form-addTask').addClass('hide');
                        $('.row-taskList').removeClass('hide');
                        var element = $(this)[0].parentElement.parentElement;
                        paramEquipment = $(element).attr('equipmentID');
                        getTaskbyEquipment();
                    });
                    $('.hide-taskList').click(function (e) { 
                        e.preventDefault();
                        $('.row-equipmentClient').removeClass('hide');
                        $('.row-registerEquipmentClient').addClass('hide');
                        $('.form-addTask').addClass('hide');
                        $('.row-taskList').addClass('hide');
                    });
                    $('.registerEquipments').click(function (e) { 
                        e.preventDefault();
                        $('.row-equipmentClient').addClass('hide');
                        $('.row-registerEquipmentClient').removeClass('hide');
                        var element = $(this)[0].parentElement.parentElement;
                        paramEquipment = $(element).attr('equipmentID');
                        getRegisterEquipment();
                    });
                    $('.back-equipmentsList').click(function (e) { 
                        e.preventDefault();
                        $('.form-editEquipment').addClass('hide');
                        $('.row-equipmentClient').removeClass('hide');
                    });
                    $('.showEditEquipment').click(function (e) { 
                        e.preventDefault();
                        $('.form-editEquipment').removeClass('hide');
                        $('.row-equipmentClient').addClass('hide');
                        var pcname = $(this).parent().parent().find('td').eq(0).html();
                        var element = $(this)[0].parentElement.parentElement;
                        paramEquipment = $(element).attr('equipmentID');
                        $.ajax({
                            type: "GET",
                            url: "http://localhost/backupmonitor-api/public/methods/equipments/" + paramClient + '/' + pcname,
                            dataType: "json",
                            success: function (response) {
                                var data = response.result;
                                console.log(data);
                                $('input[name="ee-pcname"]').val(data[0].pcname);
                                $('input[name="ee-description"]').val(data[0].description);
                                $('input[name="ee-location"]').val(data[0].location);
                                equipmentState = data[0].enabled;
                                M.updateTextFields();
                                $('select').formSelect();
                            }
                        });
                    });
                }
            });
        }
        // 
        // FUNCION PARA TRAER LOS REGISTROS POR CLIENTES
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
        // 
        // FUNCION PARA TRAER LOS REGISTROS POR EQUIPOS
        function getRegisterEquipment(){
            $.ajax({
                type: "GET",
                url: "http://localhost/backupmonitor-api/public/methods/triggersbyequipment/" + paramEquipment,
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
                        <td>${row[i].description}</td> 
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
        // 
        // LISTA DE TAREAS POR EQUIPO
        function getTaskbyEquipment(){
            $.ajax({
                type: "GET",
                url: "http://localhost/backupmonitor-api/public/methods/tasks/" + paramEquipment,
                dataType: "json",
                success: function (response) {
                    let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        var interval = row[i].interval_time;
                        if(interval != null){
                            var intervalNum = interval.split('.')[0] + 'HS.';
                        }else{
                            var intervalNum = 'N/A';
                        }
                        var type = row[i].type;
                        if(type == '1'){
                            type = 'Completo';
                        }
                        if(type == '2'){
                            type = 'Diferencial';
                        }
                        if(type == '3'){
                            type = 'Incremental';
                        }
                        if(type == '4'){
                            type = 'Tarea Vacía';
                        }
                        var typeCompression = row[i].compression;
                        if(typeCompression == '1'){
                            typeCompression = 'Sin Compresión';
                        }
                        if(typeCompression == '2'){
                            typeCompression = 'Zip';
                        }
                        if(typeCompression == '3'){
                            typeCompression = '7Zip';
                        }
                        html.push(
                        `<tr class="content" taskID="${row[i].idtask}">
                        <td>${row[i].name}</td> 
                        <td>${type}</td> 
                        <td>${typeCompression}</td> 
                        <td>${intervalNum}</td> 
                        <td>${row[i].additional_information}</td> 
                        <td><a href="#" class="btn blue-grey lighten-5 show-editTask"><i class="material-icons" style="color: #000 !important;">edit</i></a></td>  
                        <td><a href="#" class="btn blue-grey lighten-5 downloadConfig"><i class="material-icons" style="color: #000 !important;">archive</i></a></td>
                        </tr>`
                        );
                    }
                    $('.table-taskList>tbody').html(html.join(''));
                    $('.tooltipped').tooltip();
                    $('.downloadConfig').click(function (e) { 
                        e.preventDefault();
                        var elementTask = $(this)[0].parentElement.parentElement;
                        paramTask = $(elementTask).attr('taskID');
                        nameTask = $(this).parent().parent().find('td').eq(0).html();
                        var initPre = 'backupmonitor.exe /trigger=1 /equipment=';
                        var initPost = 'backupmonitor.exe /trigger=2 /equipment=';
                        var task = ' /task='
                        var taskName1 = 'pre' +  nameTask + '.bat';
                        var taskName2 = 'pos' + nameTask + '.bat';
                        var nameFile = 'Config' + ' ' + nameTask;
                        var zip = new JSZip();
                        zip.file(taskName1, initPre + paramEquipment + task + paramTask);
                        zip.file(taskName2, initPost + paramEquipment + task + paramTask);
                        var content = zip.generate({type:"blob"});
                        saveAs(content, nameFile);
                    });
                    $('.show-editTask').click(function (e) { 
                        e.preventDefault();
                        var name = $(this).parent().parent().find('td').eq(0).html();
                        var element = $(this)[0].parentElement.parentElement;
                        paramTask = $(element).attr('taskID');
                        $('.form-editTask').removeClass('hide');
                        $('.row-taskList').addClass('hide');
                        $.ajax({
                            type: "GET",
                            url: "http://localhost/backupmonitor-api/public/methods/tasks/" + paramEquipment + '/' + name,
                            dataType: "json",
                            success: function (response) {
                                var data = response.result;
                                $('input[name="et-name"]').val(data[0].name);
                                $('input[name="et-interval"]').val(data[0].interval_time);
                                $('input[name="et-info"]').val(data[0].additional_information);
                                editSelectedType = data[0].type;
                                editSelectedCompression = data[0].compression;
                                taskState = data[0].enabled;
                                M.updateTextFields();
                                $('select').formSelect();
                            }
                        });
                    });
                    $('.hide-edittask').click(function (e) { 
                        e.preventDefault();
                        $('.form-editTask').addClass('hide');
                        $('.row-taskList').removeClass('hide');
                    });
                }
            });
        }
        // 
        // NUEVO CLIENTE
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
                    // maximo 15 caracteres
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
        $('.editClient').click(function (e) { 
            e.preventDefault();
            $('.editClient').addClass('hide');
            $('.preloader-editClient').removeClass('hide');
            var name = $("input[name='ec-name']").val();
            var surname = $("input[name='ec-surname']").val();
            var businessname = $("input[name='ec-businessname']").val();
            var phone = $("input[name='ec-phone']").val();
            var email = $("input[name='ec-email']").val();
            $.ajax({
                type: "POST",
                url: "http://localhost/backupmonitor-api/public/methods/customers/save",
                data: {
                    "email": email,
                    "businessname": businessname,
                    "name": name,
                    "surname": surname,
                    "phone": phone,
                    "enabled": clientState,
                    "id": paramClient
                },
                dataType: "json",
                success: function (response) {
                    $('.editClient').removeClass('hide');
                    $('.preloader-editClient').addClass('hide');
                    M.toast({html: '¡Cliente editado!'});
                    $('#editClient-form').trigger('reset');
                    getClients();
                },
                error: function(){
                    M.toast({html: 'Error al editar cliente'});
                    $('.editClient').removeClass('hide');
                    $('.preloader-editClient').addClass('hide');
                }
            });
        });
        // 
        // NUEVO EQUIPO
        $('.newEquipment').click(function (e) { 
            e.preventDefault();
            $('.newEquipment').addClass('hide');
            $('.preloader-newEquipment').removeClass('hide');
            var descripcion = $("input[name='e-description']").val();
            var pcname = $("input[name='e-pcname']").val();
            var location = $("input[name='e-location']").val();
            var idclient = paramClient;
            $.ajax({
                type: "POST",
                url: "http://localhost/backupmonitor-api/public/methods/equipments/save",
                data: {
                    "description": descripcion,
                    "pcname": pcname,
                    "location": location,
                    "idclient": idclient,
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
        // 
        // EDITAR EQUIPO
        $('.editEquipment').click(function (e) { 
            e.preventDefault();
            $('.editEquipment').addClass('hide');
            $('.preloader-editEquipment').removeClass('hide');
            var descripcion = $("input[name='ee-description']").val();
            var pcname = $("input[name='ee-pcname']").val();
            var location = $("input[name='ee-location']").val();
            var idclient = paramClient;
            var idEquipment = paramEquipment;
            $.ajax({
                type: "POST",
                url: "http://localhost/backupmonitor-api/public/methods/equipments/save",
                data: {
                    "description": descripcion,
                    "pcname": pcname,
                    "location": location,
                    "idclient": idclient,
                    "id": idEquipment
                },
                dataType: "json",
                success: function (response) {
                    $('.editEquipment').removeClass('hide');
                    $('.preloader-editEquipment').addClass('hide');
                    M.toast({html: '¡Equipo editado!'});
                    $('#editEquipment-form').trigger('reset');
                    getClients();
                },
                error: function(){
                    M.toast({html: 'Error al editar equipo'});
                    $('.editEquipment').removeClass('hide');
                    $('.preloader-editEquipment').addClass('hide');
                }
            });
        });
        // 
        // NUEVA TAREA
        $('.newTask').click(function (e) { 
            e.preventDefault();
            $('.newTask').addClass('hide');
            $('.preloader-newTask').removeClass('hide');
            var name = $("input[name='t-name']").val();
            var type = selectedType;
            var idequipment = paramEquipment;
            var compression = selectedCompression;
            var interval_time = $("input[name='t-interval']").val();
            var additional_information = $("input[name='t-info']").val();
            $.ajax({
                type: "POST",
                url: "http://localhost/backupmonitor-api/public/methods/tasks/save",
                data: {
                    "name": name,
                    "type": type,
                    "idequipment": idequipment,
                    "compression": compression,
                    "interval_time": interval_time,
                    "additional_information": additional_information
                },
                dataType: "json",
                success: function (response) {
                    $('.newTask').removeClass('hide');
                    $('.preloader-newTask').addClass('hide');
                    M.toast({html: '¡Tarea creada!'});
                    $('#newTask-form').trigger('reset');
                    getClients();
                },
                error: function(){
                    M.toast({html: 'Error al crear tarea'});
                    $('.newTask').removeClass('hide');
                    $('.preloader-newTask').addClass('hide');
                }
            });
        });
        $('.editTask').click(function (e) { 
            e.preventDefault();
            $('.editTask').addClass('hide');
            $('.preloader-editTask').removeClass('hide');
            var name = $("input[name='et-name']").val();
            var type = editSelectedType;
            var idequipment = paramEquipment;
            var compression = editSelectedCompression;
            var interval_time = $("input[name='et-interval']").val();
            var additional_information = $("input[name='et-info']").val();
            $.ajax({
                type: "POST",
                url: "http://localhost/backupmonitor-api/public/methods/tasks/save",
                data: {
                    "name": name,
                    "type": type,
                    "idequipment": idequipment,
                    "compression": compression,
                    "interval_time": interval_time,
                    "additional_information": additional_information,
                    "id": paramTask,
                    "enabled": taskState
                },
                dataType: "json",
                success: function (response) {
                    $('.editTask').removeClass('hide');
                    $('.preloader-editTask').addClass('hide');
                    M.toast({html: '¡Tarea editada!'});
                    $('#editTask-form').trigger('reset');
                    getClients();
                },
                error: function(){
                    M.toast({html: 'Error al editar tarea'});
                    $('.editTask').removeClass('hide');
                    $('.preloader-editTask').addClass('hide');
                }
            });
        });
        // 
        // APP
        $('#exe').click(function (e) { 
            e.preventDefault();
            var ini = '/assets/docs/config.ini';
            JSZipUtils.getBinaryContent('/backups-monitor/assets/docs/BackupMonitor.zip', function(err, data) {
            if(err) {
                throw err; // or handle err
            }
            var zip = new JSZip(data);
            var ini =  `[log_path]\nC:\\Program Files (x86)\\Cobian Backup 11\\Logs\n[server_address]\nlocalhost\\SQLEXPRESS`
            zip.file("config.ini", ini);
            var content = zip.generate({type:"blob"});
            saveAs(content, 'aplicativo-config');
            });
        });
        // 
        // BUSCADORES
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
    </script>
</body>
</html>