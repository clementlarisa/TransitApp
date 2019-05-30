<?php include('server.php');
if($_SESSION['logged_in']){
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>STB</title>
        <link rel="stylesheet" href="CSS/footer.css">
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
                <th>Numarul Liniei</th>
                <th>Linie </th>
                <th>Statie plecare</th>
                <th>Statie sosire</th>
                <th>Optiune</th>
            </tr>
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'transport');


                $show = "SELECT s.linie_id AS linie_id, s.denumire_linie AS denumire_linie, s.plecare AS plecare, s.destinatie as sosire
                            FROM transport.linie s 
                         WHERE s.linie_id BETWEEN 1 and 4
                         ";
               /* $result = mysqli_query($db, $show);*/
               $result=$db->query($show);
                while ($rows = mysqli_fetch_array($result)) {
                    echo "<tr class=''>";
                    echo " <form action=\"statii-STB.php\" method=\"post\" class=\"form-inline justify-content-center\">";
                    echo "<td><input type = 'hidden' name = 'linie_id' value = " . $rows['linie_id'] . ">" . $rows['linie_id'] . "</td>";
                    echo "<td><input type = 'hidden' name = 'denumire_linie' value = " . $rows['denumire_linie'] . ">" . $rows['denumire_linie'] . "</td>";
                    echo "<td><input type = 'hidden' name = 'plecare' value = " . $rows['plecare'] . ">" . $rows['plecare'] . "</td>";
                    echo "<td><input type = 'hidden' name = 'sosire' value = " . $rows['sosire'] . ">" . $rows['sosire'] . "</td>";
                    echo "<td>";
                    echo "<input type=\"submit\" name=\"cauta-linie\" value=\"Vezi linii\" class=\"btn btn-primary\" >";
                    echo "</td>";
                    echo "</form>";
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