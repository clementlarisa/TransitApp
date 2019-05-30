<?php include('server.php');
if($_SESSION['logged_in']){
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>STB</title>
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Load JQuery UI -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!-- Add references to the Azure Maps Map control JavaScript and CSS files. -->
        <link rel="stylesheet" href="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.css" type="text/css" />
        <script src="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.js"></script>
    </head>
    <body>
    <?php
    if($_SESSION['logged_in']){
        ?>
        <script src = "JS/menuAfterLogin.js"></script>
    <?php } else { ?>
        <script src = "JS/menu.js"></script>
    <?php } ?>

    <div class="container bg-light" style="height:100vh;">
        <table class="table table-light table-striped table-hover">
            <tr>
                <th>Numar statie</th>
                <th>Numar linie </th>
                <th>Nume statie</th>
                <th>Adresa</th>
                <th>Optiune</th>
            </tr>
            <?php
            if (isset($_POST['cauta-linie'])) {

                $linie_id = mysqli_real_escape_string($db, $_POST['linie_id']);


                $show = "SELECT P.statie_id as statie_id ,P.linie_id AS linie_id, P.denumire_statie AS denumire_statie, P.adresa AS adresa
                            FROM transport.statie P 
                            WHERE p.linie_id ='$linie_id' 
                         ";
                $result = mysqli_query($db, $show);
                while ($rows = mysqli_fetch_array($result)) {

                    echo "<tr class=''>";
                    echo " <form action=\"cfr-config-bilet.php\" method=\"post\" class=\"form-inline justify-content-center\">";
                    echo "<td><input type = 'hidden' readonly name = 'statie_id' value = " . $rows['statie_id'] . ">" . $rows['statie_id'] . "</td>";
                    echo "<td><input type = 'hidden' readonly name = 'linie_id' value = " . $rows['linie_id'] . ">" . $rows['linie_id'] . "</td>";
                    echo "<td><input type = 'hidden' readonly name = 'denumire_statie' value = " . $rows['denumire_statie'] . ">" . $rows['denumire_statie'] . "</td>";
                    echo "<td><input type = 'hidden' readonly name = 'adresa' value = " . $rows['adresa'] . ">" . $rows['adresa'] . "</td>";
                    echo "<td>";
                    echo "<input type=\"submit\" name=\"adauga-itinerarii\" value=\"Adauga la favorite\" class=\"btn btn-primary\" >";
                    echo "</td>";
                    echo "</form>";
                }
            }

            ?>
        </table>
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