<?php include ('server.php');
if($_SESSION['logged_in']){
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>CFR</title>
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php
    if($_SESSION['logged_in']){
        ?>
        <script src = "JS/menuAfterLogin.js"></script>
    <?php } else { ?>
        <script src = "JS/menu.js"></script>
    <?php } ?>
    <div class="container bg-light" style="height:100%;">
        <div class="row">
            <div class="col-md-6" style="background-color:lavender;top:20px" >
                <!--<img src="Imagini/ab-stb.jpg" class="img-rounded img-responsive" alt="Abonament STB" style="width: 100%">
                <h2 style="text-align: center">Cumpara abonament</h2> -->
                <img class="img-rounded img-responsive"  src="Imagini/bilete-tren.jpg" class="img-rounded img-responsive" alt="Bilete Tren" style="width:70%; margin: auto; display:block">
                <div>
                    <p>
                        <a href="rezerva-cfr.php" class="btn btn-lg btn-primary" style="margin: auto; display:table">Rezerva bilet</a>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-4"  style="background-color:lavender; left:5%;top:20px">
                <div class="hovereffect">
                    <!--<h2 style="text-align: center">Trasee disponibile </h2>-->
                    <img class="img-rounded img-responsive"  src="Imagini/stb-route.png" class="img-rounded img-responsive" alt="Route" style="width:44%; margin: auto; display:block">
                    <div class="overlay">
                        <p>
                            <a href="#" class="btn btn-lg btn-primary" style="margin: auto; display:table">Planificator calatorii</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class = "row">
            <div class="col-md-6 col-md-offset-8" style="background-color:lavender;left:30%;top:30px">
                <img class="img-rounded img-responsive"  src="Imagini/stb-history.png" class="img-rounded img-responsive" alt="History " style="width:44%; margin: auto; display:block">
                <div>
                    <p>
                        <a href="#" class="btn btn-lg btn-primary" style="margin: auto; display:table">Istoric calatorii</a>
                    </p>
                </div>

            </div>
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