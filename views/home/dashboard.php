<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup Monitor | Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="row-dashboard">
        <div class="dashboard-panel card hoverable">
            <div class="rejilla card-content">
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        // VARIABLES DE ENTORNO
        var widthScreen = screen.width;
        var heightScreen = screen.height;
        //
        $(document).ready(function () {
            // DASHBOARD
            $('.dashboard-panel').css({'width': widthScreen, 'height': heightScreen, 'overflow': 'hidden', 'margin': '0px', 'padding': '0px'});
            $.ajax({
                type: "GET",
                url: "http://localhost/backupmonitor-api/public/methods/dashboard",
                dataType: "json",
                success: function (response) {
                    console.log(response.result);
                    let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        if (row[i].detail != null) {
                            var detail = row[i].detail.split(' ');
                            var detailOK = detail[0].split('=')[1];
                            var detailNoData = detail[1].split('=')[1];
                            var detailError = detail[2].split('=')[1];
                            if (detail[0] == '' && detail[1] != '' && detail[2] != '') {
                                detailOK = '';
                                detailNoData = `<i class="material-icons tiny" style="color: #212121 !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i>` + detailNoData + ' - Vacías ';
                                detailError = `<i class="material-icons tiny" style="color: #b71c1c !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i>` + detailError + ' - Error';
                            };
                            if (detail[0] != '' && detail[1] == '' && detail[2] != '') {
                                detailOK = `<i class="material-icons tiny" style="color: #2e7d32 !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i>` + detailOK + ' - OK ';
                                detailNoData = '';
                                detailError = `<i class="material-icons tiny" style="color: #b71c1c !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i>` + detailError + ' - Error';
                            };
                            if (detail[0] != '' && detail[1] != '' && detail[2] == '') {
                                detailOK = `<i class="material-icons tiny" style="color: #2e7d32 !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i> ` + detailOK + ' - OK ';
                                detailNoData = `<i class="material-icons tiny" style="color: #212121 !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i> ` + detailNoData + ' - Vacías';
                                detailError = '';
                            };
                            if (detail[0] != '' && detail[1] != '' && detail[2] != '') {
                                detailOK = `<i class="material-icons tiny" style="color: #2e7d32 !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i> ` + detailOK + ' - OK ';
                                detailNoData = `<i class="material-icons tiny" style="color: #212121 !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i> ` + detailNoData + ' - Vacías ';
                                detailError = `<i class="material-icons tiny" style="color: #b71c1c !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i>` + detailError + ' - Error';
                            };
                            if (detail[0] == '' && detail[1] == '' && detail[2] == '') {
                                detailOK = '';
                                detailNoData = '';
                                detailError = '';
                            };
                        }else{
                            var detail = 'Sin detalle';
                            var detailOK = `<i class="material-icons tiny" style="color: #2e7d32 !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i>` + ' 0 ';
                            var detailNoData = `<i class="material-icons tiny" style="color: #212121 !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i>` + ' 0 ';
                            var detailError = `<i class="material-icons tiny" style="color: #b71c1c !important; margin-top: 5px !important; font-size: 10px;">fiber_manual_record</i>` + ' 0';
                        }
                        // console.log(detailOK);
                        // console.log(detailNoData);
                        // console.log(detailError);
                        html.push(
                            `<div class="item card horizontal hoverable"><div class="card-content internal-item">${row[i].businessname} | Tareas: ${row[i].tasks_count} | ${detailOK} ${detailNoData} ${detailError}</div></div>`
                        );
                    }
                    $('.rejilla').html(html.join(''));
                    $('.item').css({'margin': '0px', 'padding': '0px', 'border-left-style': 'outset', 'border-left-color': '#000', 'border-left-width': '5px'});
                    $('.internal-item').css({'height': '10px', 'width': 'auto', 'margin': '5px 5px 20px 5px', 'padding': '0px', 'font-size': '12px'});
                }
            });
            $('.rejilla').css({'display': 'grid', 'grid-template-columns': '1fr 1fr 1fr 1fr', 'grid-row-gap': '3px', 'grid-column-gap': '3px', 'margin': '8px 8px 8px 8px', 'padding': '0px'});
            // 
        }); 
    </script>
</body>
</html>