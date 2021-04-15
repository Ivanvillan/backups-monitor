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
                        html.push(
                            `<div class="item card horizontal hoverable"><div class="card-content internal-item">${row[i].businessname} | Tareas: ${row[i].tasks_count} | ${row[i].detail}</div></div>`
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