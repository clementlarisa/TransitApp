
<?php include ('server.php');
if($_SESSION['logged_in']){
?>
<DOCTYPE html>
    <html>
    <head>

        <link rel="stylesheet" href="CSS/footer.css">
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
    </head>
    <body>
    <script src = "JS/menuAfterLogin.js"></script>
    <script src="JS/stbAbonament.js"></script>>
    <!--  <div class="container bg-light" id="contain" style="height:100%;">
          <h2 style="margin-top:7%; margin-bottom:3%">Cumpara </h2>-->

    <?php
    if(isset($successMsg)){
        ?>
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-info-sign"></span>
            <?php echo $successMsg; ?>
        </div>
        <?php
    }
    ?>


    <div class="container bg-light" style="height:100%">
        <div class="row">
            <ul>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Services-tab  item" style="left:10%">
                    <div class="folded-corner service_tab_1">
                        <div class="text">
                            <i class="fa fa-credit-card  fa-5x fa-icon-image"></i>
                            <p class="item-title">
                               <!-- <a href="stb-abonament.php" role="button" class="btn btn-outline-info"> Abonament</a>-->
                            <h3>Abonament</h3>
                            </p><!-- /.item-title -->
                            <p>
                                Fiecare abonament dispunde de un id unic si expira la 30 de zile de la activarea acestuia. Cu ajutorul chitantei trimise pe mail puteti opta pentru decontarea acestuia si obtinerea celor 25 lei.
                            </p>
                            <a role="button" class="btn btn-primary btn-sm" href="stb-abonament.php">Creeaza abonament </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Services-tab item" style="left:27%">
                    <div class="folded-corner service_tab_1">
                        <div class="text">
                            <i class="fa fa-bus fa-5x fa-icon-image" ></i>
                            <p class="item-title">
                            <h3> Calatorie</h3>
                            </p><!-- /.item-title -->
                            <p>
                               Fiecare calatorie dispune de un cod unic pe care va trebui sa il prezentati la orice control din mijlocul de transport in comun, la cererea personaelor autorizate. O calatorie costa 1,30 lei.
                            </p>
                            <a role="button" class="btn btn-primary btn-sm" href="stb-calatorie.php">Cumpara calatorie </a>
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





