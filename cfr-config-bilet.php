<?php
include_once('server.php');
include_once('controller-cfr-adauga-bilet.php');
if ($_SESSION['logged_in']) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>CFR</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS/footer.css">

    </head>
    <body>
    <?php
    if ($_SESSION['logged_in']) {
        ?>
        <script src="JS/menuAfterLogin.js"></script>
    <?php } else { ?>
        <script src="JS/menu.js"></script>
    <?php } ?>
    <div class="container bg-dark" style="height:100vh;">
        <table class="table table-dark table-striped table-hover">
            <tr>
                <th>Cod Unic</th>
                <th>Clasa</th>
                <th>Vagon</th>
                <th>Loc</th>
                <th>Linie</th>
                <th>Statie de Plecare</th>
                <th>Ora de Plecare</th>
                <th>Statie de Sosire</th>
                <th>Ora de Sosire</th>
                <th></th>
            </tr>
            <?php
            $cod = uniqid();
            $clasa = 2;
            $vagon = rand(1, 10);
            $loc = rand(1, 100);
            $linie_id = $_POST['linie_id'];
            $statie_plecare = $_POST['statie_plecare'];
            $ora_plecare = $_POST['ora_plecare'];
            $statie_sosire = $_POST['statie_sosire'];
            $ora_sosire = $_POST['ora_sosire'];
            $username = $_SESSION['user_id'];
            $result = add_ticket($cod, $clasa, $vagon, $loc, $linie_id, $statie_plecare, $ora_plecare, $statie_sosire, $ora_sosire, $username);
            //afisare cod + clasa + vagon + loc
            echo "<tr class = ''><td>" . $cod . "</td>";
            echo "<td>" . $clasa . "</td>";
            echo "<td>" . $vagon . "</td>";
            echo "<td>" . $loc . "</td>";
            echo "<td>" . $linie_id . "</td>";
            echo "<td>" . $statie_plecare . "</td>";
            echo "<td>" . $ora_plecare . "</td>";
            echo "<td>" . $statie_sosire . "</td>";
            echo "<td>" . $ora_sosire . "</td>";
            echo "<br/>";

            if ($result === TRUE) {
                echo "<div class=\"alert alert-success\" role=\"alert\">
                        Biletul a fost adaugat cu succes in profilul tau!</div>";
            }


            ?>
        </table>
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