<?php include('server.php');
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
                <th>Numarul Liniei</th>
                <th>Statia de Plecare</th>
                <th>Ora de Plecare</th>
                <th>Statia de Sosire</th>
                <th>Ora de Sosire</th>
            </tr>
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'transport');
            //cautare statie cfr
            $plecare = $_POST['cfr-cauta-plecare'];
            $sosire = $_POST['cfr-cauta-destinatie'];
            if (isset($plecare)) {
                $show = "SELECT P.linie_id AS linie_id, P.ora_plecare AS ora_plecare, S.ora_sosire AS ora_sosire,
                            P.denumire_statie AS statie_plecare, S.denumire_statie AS statie_sosire
                            FROM transport.statie P 
                            INNER JOIN transport.statie S 
                            ON P.linie_id = S.linie_id
                            WHERE p.denumire_statie ='$plecare' 
                            AND S.denumire_statie = '$sosire'
                         ";
                $result = mysqli_query($db, $show);
                while ($rows = mysqli_fetch_array($result)) {
                    echo "<tr class=''>";
                    echo " <form action=\"cfr-config-bilet.php\" method=\"post\" class=\"form-inline justify-content-center\">";
                    echo "<td><input type = 'hidden' readonly name = 'linie_id' value = " . $rows['linie_id'] . ">" . $rows['linie_id'] . "</td>";
                    echo "<td><input type = 'hidden' readonly name = 'statie_plecare' value = " . $rows['statie_plecare'] . ">" . $rows['statie_plecare'] . "</td>";
                    echo "<td><input type = 'hidden' readonly name = 'ora_plecare' value = " . $rows['ora_plecare'] . ">" . $rows['ora_plecare'] . "</td>";
                    echo "<td><input type = 'hidden' readonly name = 'statie_sosire' value = " . $rows['statie_sosire'] . ">" . $rows['statie_sosire'] . "</td>";
                    echo "<td><input type = 'hidden' readonly name = 'ora_sosire' value = " . $rows['ora_sosire'] . ">" . $rows['ora_sosire'] . "</td>";;
                    echo "<td>";
                    echo "<button class=\"btn btn-outline-success my-2 my-sm-0 btn-block\" type=\"submit\">Continua</button>";
                    echo "</td>";
                    echo "</form>";
                    echo "<br/>";
                }
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