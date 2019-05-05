<?php include ('server.php');
if($_SESSION['logged_in']){
?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>STB</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="JS/stbAbonament.js"> </script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        </head>

        <body>
        <?php
        if($_SESSION['logged_in']){
            ?>
            <script src = "JS/menuAfterLogin.js"></script>
        <?php } else { ?>
            <script src = "JS/menu.js"></script>
        <?php } ?>


        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <div class="container" id="space">
            <div class="row">
                <div class="col-md-6" style="background-color:lavender;top:20px" >
                    <!--<img src="Imagini/ab-stb.jpg" class="img-rounded img-responsive" alt="Abonament STB" style="width: 100%">
                    <h2 style="text-align: center">Cumpara abonament</h2> -->
                    <img class="img-rounded img-responsive"  src="Imagini/ab-stb.jpg" class="img-rounded img-responsive" alt="Abonament STB" style="width:70%; margin: auto; display:block">
                    <div>
                        <p>
                            <a href="stb-abonament.php" class="btn btn-lg btn-primary" style="margin: auto; display:table">Abonament</a> -->
                           <!-- <button class="btn btn-lg btn-primary" onclick="abonament()" style="margin: 0 auto; display:block">Abonament</button> -->
                        </p>
                    </div
                </div>
                <div class="col-md-6 col-md-offset-2"  style="background-color:lavender; left:5%;top:20px">
                        <!--<h2 style="text-align: center">Trasee disponibile </h2>-->
                        <img class="img-rounded img-responsive"  src="Imagini/stb-route.png" class="img-rounded img-responsive" alt="Route" style="width:44%; margin: auto; display:block">
                        <div>
                            <p>
                                <button class="btn btn-lg btn-primary" onclick="myFunction()" style="margin: auto; display:block">Calatorie</button>
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
}?>