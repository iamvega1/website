<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Inicio</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="Styles/Styles.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover();
        });
    </script>
</head>
<body>
    <div class=" container">
        <!-- Barra de navegacion -->
        <header>
            <?php require("menu.php") ?>
        </header>
    </div>
    <div>
        <!--Seccion servicios-->
        <section>
            <div style="margin-top: 55px" class="container">
                <div>
                    <h1 class="text-center"<strong style="color:#808080">Servicios</strong></h1>
                    <p class="text-justify">
                        <strong style="color:#808080">INNOVATEC</strong> le ofrece los servicios de consultoría de desarrollo en diferentes plataformas.
                    </p><br />
                </div>
                <br /><br />
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <h3><span class="logo-ico icon-earth"><strong style="color:#808080"> DISEÑO WEB</strong></span></h3>
                        <img src="http://files.parsetfss.com/c221969a-4a6d-4ddf-bcdd-cd916d015ec2/tfss-53cc8a26-70de-4452-bf07-e920bce0ccdb-web.jpg" class="img-thumbnail" style="margin-bottom:10px" />
                        <p class="text-justify" ">
                            Sabemos lo importante que es para su empresa la presencia de ella en internet.
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <h3><span class="logo-ico icon-windows8"><strong style="color:#808080">CLIENTE SERVIDOR</strong></span></h3>
                        <img src="http://files.parsetfss.com/c221969a-4a6d-4ddf-bcdd-cd916d015ec2/tfss-2e22e5c6-15b1-40e3-bb14-b191f612344d-cservidor.jpg" class="img-thumbnail" style="margin-bottom:10px" />
                        <p class="text-justify">
                            Desarrollo de programas con un alto nivel de rapidez de procesamiento de información y eficacia.
                        </p><br />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr />
</body>
</html>
