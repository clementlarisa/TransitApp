<?php include('server.php');

if ($_SESSION['logged_in']) {
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
                <center><h2 class="mx-auto">Bilete Mele</h2></center>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Cod Bilet</th>
                        <th>Clasa</th>
                        <th>Vagon</th>
                        <th>Loc</th>
                        <th>Linie</th>
                        <th>Statie Plecare</th>
                        <th>Ora Plecare</th>
                        <th>Statie Sosire</th>
                        <th>Ora Sosire</th>
                    </tr>
                    <?php
                    $db = mysqli_connect('localhost', 'root', '', 'transport');
                    //afisare rute
                    $username = $_SESSION['user_id'];
                    $sql = "SELECT b.bilet_id as bilet_id, b.clasa as clasa, b.vagon as vagon, b.loc as loc, b.linie_id as linie, b.statie_plecare as statie_plecare
                            , b.ora_plecare as ora_plecare, b.statie_sosire as statie_sosire, b.ora_sosire as ora_sosire FROM transport.bilete b WHERE b.user_id = '$username'";
                    $result = $db->query($sql);
                    while ($rows = mysqli_fetch_array($result)) {
                        echo "<tr class=''>";
                        echo "<td>" . $rows['bilet_id'] . "</td>";
                        echo "<td>" . $rows['clasa'] . "</td>";
                        echo "<td>" . $rows['vagon'] . "</td>";
                        echo "<td>" . $rows['loc'] . "</td>";
                        echo "<td>" . $rows['linie'] . "</td>";
                        echo "<td>" . $rows['statie_plecare'] . "</td>";
                        echo "<td>" . $rows['ora_plecare'] . "</td>";
                        echo "<td>" . $rows['statie_sosire'] . "</td>";
                        echo "<td>" . $rows['ora_sosire'] . "</td>";


                    }
                    ?>
                </table>
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