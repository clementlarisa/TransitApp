<?php include('server.php');

if ($_SESSION['logged_in']){
?>
<DOCTYPE html>
    <html>
    <head>
        <title><?php echo $_SESSION['first_name'] . "'s" . ' ' . 'Account' ?></title>
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <style>
            .history {
                width: 100%;
                border: 2px solid black;
            }

            td {
                border: 2px solid black;
            }

            tr {
                border: 2px solid black;
            }
        </style>
    </head>
    <body>
    <script src="JS/menuAfterLogin.js"></script>
    <div class="container bg-light" style="height:100%;">
        <div class="row  bg-light">
            <div class="col-md-auto mt-5">
                <script src="JS/myAccountVertMenu.js"></script>
            </div>
            <div class="col-sm mt-5">
                <center><h2 class="mx-auto">Istoric itinerarii</h2></center>
                <?php
                $user_id = "user_id";
                $query = "SELECT linie_id FROM statie s JOIN istoric i ON (s.statie_id=i.statie_id) WHERE user_id = '$_SESSION[$user_id]'";
                $query = "SELECT statie_id FROM istoric WHERE user_id = '$_SESSION[$user_id]'";
                $results = mysqli_query($db, $query);
                $nns = [];
                $nns2 = [];
                $k = 0;
                while ($nn = mysqli_fetch_assoc($results)) {
                    $nns[] = $nn;
                    $nns[$k] = $nn['statie_id'][$k];
                    $k++;

                }
                echo "<table class = 'history'>";

                echo "<tr>" . "\n" . "<th>Numar</th>" . "<th>Denumire linie</th>"."</tr>";
                for($i = 0; $i<count($nns); $i += 1){
                    echo "<tr>";
                    echo "<td>" . ($i+1) . "</td>";
                    $id_linie = $nns[$i];
                    $query ="SELECT denumire_linie FROM linie WHERE linie_id = '$id_linie'";

                    $id_linie = $nns[$i];
                    $query = "SELECT denumire_linie,plecare,destinatie FROM linie i join statie s ON (i.linie_id = s.linie_id) WHERE s.statie_id = '$id_linie'";
                    $results2 = mysqli_query($db, $query);
                    while ($nn2 = mysqli_fetch_assoc($results2)) {
                        $nns2[] = $nn2;
                    }
                    for ($j = 0; $j < count($nns2); $j += 1) {
                        echo "<td>" . $nns2[$j]['denumire_linie'] . "</td>";
                    }
                    $linie = mysqli_fetch_assoc($results2);

                    echo "<td>" . $linie['denumire_linie'] . "</td>";

                    echo "</tr>";
                }
                echo "</table>";
                ?>
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
