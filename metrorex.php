<?php include('server.php');
if($_SESSION['logged_in']){
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>STB</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/card.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php
    if($_SESSION['logged_in']){
        ?>
        <script src = "JS/menuAfterLogin.js"></script>
    <?php } else { ?>
        <script src = "JS/menu.js"></script>
    <?php } ?>

    <div class="container bg-light" style="height:100%">
        <div class="row">
            <ul>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Services-tab  item" style="left:3%">
                    <div class="folded-corner service_tab_1">
                        <div class="text">
                            <i class='fa fa-id-card-o fa-5x fa-icon-image' ></i>
                            <p class="item-title">
                            <h3>Abonament</h3>
                            </p><!-- /.item-title -->
                            <p>
                                Fiecare abonament dispunde de un id unic si expira la 30 de zile de la activarea acestuia. Cu ajutorul chitantei trimise pe mail puteti opta pentru decontarea acestuia si obtinerea celor 35 lei.
                            </p>
                            <a role="button" class="btn btn-primary btn-sm" href="metrorex-abonament.php">Creeaza abonament </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Services-tab item" style="left:15%">
                    <div class="folded-corner service_tab_1">
                        <div class="text">
                            <i class="fas fa-route fa-5x fa-icon-image" ></i>
                            <p class="item-title">
                            <h3> Ruta</h3>
                            </p><!-- /.item-title -->
                            <p>
                                Aici poti vedea cum ajungi la destinatia dorita si care este traseul cel mai bun. Alege cea mai apropiata statie de locul unde te afli si statia unde vrei sa ajungi, apoi se va afisa lista statiilor intermediare.
                            </p>
                            <a role="button" class="btn btn-primary btn-sm" href="metrorex-ruta.php">Alege ruta </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Services-tab item" style="left:27%">
                    <div class="folded-corner service_tab_1">
                        <div class="text">
                            <i class="fa fa-history fa-5x fa-icon-image" ></i>
                            <p class="item-title">
                            <h3> Istoric de calatori</h3>
                            </p><!-- /.item-title -->
                            <p>
                                Fiecare calatorie dispune de un cod unic pe care va trebui sa il prezentati la orice control din mijlocul de transport in comun, la cererea personaelor autorizate. O calatorie costa 1,30 lei.
                            </p>
                            <a role="button" class="btn btn-primary btn-sm" href="metrorex-istoric.php">Calatoriile tale </a>
                        </div>
                    </div>
                </div>



            </ul>
        </div>
    </div>
    <?php
    if($_SESSION['logged_in']){
        ?>
        <script src = "JS/footer.js"></script>
    <?php } else { ?>
        <script src = "JS/footerBeforeLogin.js"></script>
    <?php } ?>
    </body>
    </html>
<?php } else {
    header('location:login.php');
} ?>