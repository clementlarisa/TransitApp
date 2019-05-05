
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

        <script>
            window.onbeforeunload = function() {
                return "Daca nu completezi datele de plata, abonamentul tau va fi anulat. Esti sigur?";
                //if we return nothing here (just calling return;) then there will be no pop-up question at all

            }
           function metodaPlata()
           {
               var div=document.getElementById("cardPay");
               div.style.visibility="visible";
           }

           function plataSucces()
           {
               alert("Felicitari! Abonamentul tau a fost creat. Nu uita sa verifici data la care expira, intrucat acesta nu va mai fi valabil dupa data scrisa.")
               window.location("stb.php");
           }
        </script>

        <div class="container bg-light" style="height:100%">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Services-tab item" style="top:0px;left:15%">
                    <div class="folded-corner service_tab_1">
                        <div class="text">
                            <i class="fa fa-money fa-5x fa-icon-image"></i>
                            <p class="item-title">
                            <h3> Cumpara abonament</h3>
                            </p><!-- /.item-title -->
                            <p>
                                Aici poti introduce datele cardului tau si sa platesti in siguranta abonamentul tau STB.
                            </p>
                            <button role="button" class="btn btn-primary btn-sm" onclick="metodaPlata()">Cumpara abonament </button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4" id="cardPay" style="visibility: hidden;left:25%">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Payment Details
                            </h3>
                            <div class="checkbox pull-right">
                                <label>
                                    <input type="checkbox" />
                                    Remember
                                </label>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="cardNumber">
                                        CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                               required autofocus />
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 col-md-7">
                                        <div class="form-group">
                                            <label for="expityMonth">
                                                EXPIRY DATE</label>
                                            <div class="col-xs-6 col-lg-6 pl-ziro">
                                                <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                            </div>
                                            <div class="col-xs-6 col-lg-6 pl-ziro">
                                                <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-md-5 pull-right">
                                        <div class="form-group">
                                            <label for="cvCode">
                                                CV CODE</label>
                                            <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-ron"></span>25.00</span> Final Payment</a>
                        </li>
                    </ul>
                    <br/>
                    <button class="btn btn-success btn-lg btn-block" role="button" onclick="plataSucces()">Pay</button>>
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


