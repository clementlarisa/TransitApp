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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    if ($_SESSION['logged_in']) {
        ?>
        <script src="JS/menuAfterLogin.js"></script>
    <?php } else { ?>
        <script src="JS/menu.js"></script>
    <?php } ?>
    <div class="container bg-dark" style="height:100%;">
        <br/>
        <form action="cfr-cautare-ruta.php" method="post" class="form-inline justify-content-center">
            <input class="form-control mr-sm-2" type="search" placeholder="Statie de Plecare" aria-label="Search" name="cfr-cauta-plecare">
            <input class="form-control mr-sm-2" type="search" placeholder="Statie de Sosire" aria-label="Search" name="cfr-cauta-destinatie">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cauta</button>
        </form>
        <br/>
        <div id="demo" class="carousel slide justify-content-center" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Imagini/cfr-student-transport.jpg" alt="Student Transport" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Student Transport, calatorii fara...</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Imagini/cfr-casa-bilete.jpg" alt="Casa Bilete" width="1100" height="500">
                    <div class="carousel-caption" style="color: #0E0E0E;">
                        <h3>Casa de bilete cu un staff mai mult sau mai putin... amabil</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Imagini/cfr-coada-bilete.jpg" alt="Casa Bilete" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Cozi interminabile din cauza carora riscai sa pierzi trenul sau ultimul loc in vagon...</h3>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <br/>
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