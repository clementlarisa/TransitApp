<?php include ('server.php');

if($_SESSION['logged_in']){
    ?>
    <DOCTYPE html>
    <html>
    <head>
        <title><?php echo $_SESSION['first_name'] ."'s".' ' . 'Account'?></title>
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <style>
            .history{
                width:100%;
                border: 2px solid black;
            }
            th{
                border:2px solid black;
                text-align: center;
            }
            td{
                border:2px solid black;
                text-align: center;
            }
            tr{
                border:2px solid black;
            }
        </style>
    </head>
    <body>
    <script src = "JS/menuAfterLogin.js"></script>
    <div class="container bg-light" style="height:100%;">
        <div class="row  bg-light">
            <div class="col-md-auto mt-5">
                <script src ="JS/myAccountVertMenu.js"></script>
            </div>
            <div class="col-sm mt-5">
                <center><h2 class="mx-auto">Abonamentele mele</h2></center>
                <?php
                $user_id = "user_id";
                $query = "SELECT linie_id FROM bilet WHERE user_id = '$_SESSION[$user_id]'";
                $results = mysqli_query($db, $query);
                if(mysqli_num_rows($results) > 0) {
                    $nns = [];
                    $nns2 = [];
                    $k = 0;
                    while ($nn = mysqli_fetch_assoc($results)) {
                        $nns[$k] = $nn['linie_id'][$k];
                        $k +=1;
                    }
                    echo "<table class = 'history'>";
                    echo "<tr>" . "\n" . "<th>Tren</th>" . "<th>Plecare</th>" . "<th>Destinatie</th>" . "<th>Ora plecare</th>" ."<th>Ora sosire</th> " . "</tr>";
                    for ($i = 0; $i < count($nns); $i += 1) {

                        echo "<tr>";
                        $linie_id = $nns[$i];
                        $query = "SELECT denumire_linie , plecare, destinatie FROM linie  WHERE linie_id ='$linie_id'";
                        $results = mysqli_query($db,$query);
                        $linie = mysqli_fetch_assoc($results);
                        $denumire_linie = $linie['denumire_linie'];
                        $plecare = $linie['plecare'];
                        $destinatie = $linie['destinatie'];
                        echo "<td> $denumire_linie</td>";
                        echo "<td> $plecare </td>";
                        echo "<td> $destinatie </td>";
                        //$query = "SELECT "
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "<center><p>Nu aveti bilete cumparate!</p></center>";
                }
                print $_SESSION['beginDate'];
                ?>
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
}?>