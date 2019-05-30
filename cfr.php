<?php include('server.php');
if ($_SESSION['logged_in']) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>CFR</title>
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php
    if ($_SESSION['logged_in']) {
        ?>
        <script src="JS/menuAfterLogin.js"></script>
    <?php } else { ?>
        <script src="JS/menu.js"></script>
    <?php } ?>
    <div class="container">
        <div class="card alert alert-warning my-5 py-4 text-center">
            <div class="card-body">
                <p class="m-0">Atentie! Se vor prezenta controlorului
                    pagina 'Biletele Mele', precum si 'My Account', in posesia CI si a
                    Legitimatiei de Transport.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100 bg-dark text-white">
                    <img class="card-img-top" src="Imagini/cfr-bilete.png" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">1: Mersul Trenurilor</h2>
                        <p class="card-text">Vezi tabela cu liniile disponibile, in scopul cautarii unei
                            rute convenabile.</p>
                    </div>
                    <div class="card-footer">
                        <a href="cfr-mersul-trenurilor.php" class="btn btn-outline-success my-2 my-sm-0 btn-block">consulta</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100 bg-dark text-white">
                    <img class="card-img-top" src="Imagini/cfr-route.PNG" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">2: Cauta & Rezerva</h2>
                        <p class="card-text">Cauta trenurile disponibile, in detaliu si rezerva-ti biletul.</p>
                    </div>
                    <div class="card-footer">
                        <a href="cfr-rezervare.php" class="btn btn-outline-success my-2 my-sm-0 btn-block">cauta</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100 bg-dark text-white">
                    <img class="card-img-top" src="Imagini/cfr-istoric.PNG" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">3: Biletele Mele</h2>
                        <p class="card-text">Aici gasesti o tabela cu datele tuturor biletelor achizitionate. Drum
                            bun!</p>
                    </div>
                    <div class="card-footer">
                        <a href="my_account_bilete.php"
                           class="btn btn-outline-success my-2 my-sm-0 btn-block">verifica</a>
                    </div>
                </div>
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