<?php include('server.php');
if ($_SESSION['logged_in']) {
    ?>
    <DOCTYPE html>
    <html>
    <head>

        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="CSS/card.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    </head>
    <body>
    <script src="JS/menuAfterLogin.js"></script>
    <script src="JS/stbAbonament.js"></script>
    >
    <div class="container bg-light" id="contain" style="height:100%;">
        <h2 style="margin-top:7%; margin-bottom:3%">Reinoieste-ti abonamentul METROREX </h2>

        <?php
        if (isset($successMsg)) {
            ?>
            <div class="alert alert-success">
                <span class="glyphicon glyphicon-info-sign"></span>
                <?php echo $successMsg; ?>
            </div>
            <?php
        }
        ?>

        <div class="form-row" style="margin-top:30px">

            <form method="post" action="metrorex-abonament.php">
                <div class="form-group">
                    <label for="inputDate">Data de incepere a abonamentului </label>
                    <input type="text" size="20" id="inputDate" value='<?php echo date("Y-m-d"); ?>'
                           class="form_datetime" name="beginDate"> </br>
                </div>
                <div class="form-group">
                    <label for="inputExpire">Data de expirare a abonamentului</label>
                    <input type="text" size="20" id="inputExpire" class="form-control" name="expirationDate">
                </div>
                <div class="form-group">
                    <center><input type="submit" name="reinoire" value="Reinoieste abonament abonament"
                                   class="btn btn-primary"></center>
                </div>
            </form>

            <div class="col-md-6" style="left:10%" id="hiddenDiv" style="display:none">
                <h5> Abonamentul cu id-ul <?php echo $_SESSION['user_id']; ?> va fi creat imediat. Il vei putea vedea pe
                    profilul tau dupa plata sumei de 35 de lei..</h5>

                <a href="stb-pay.php" class="btn btn-lg btn-primary"> Continua la checkout</a>
            </div>


        </div>


    </div>

    <?php
    if ($_SESSION['logged_in']) {
        ?>
        <script src="JS/footer.js"></script>
    <?php } else { ?>
        <script src="JS/footerBeforeLogin.js"></script>
    <?php } ?>
    </body>
    </html>
<?php } else {
    header('location:login.php');
} ?>