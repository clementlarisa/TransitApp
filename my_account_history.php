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
            td{
                border:2px solid black;
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
                <center><h2 class="mx-auto">Bilete Mele</h2></center>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Cod Bilet</th>
                        <th>Denumire Statie</th>
                        <th>Adresa</th>
                    </tr>
                    <?php
                    $db = mysqli_connect('localhost', 'root', '', 'transport');
                    //afisare rute
                    $sql = "SELECT s.linie_id as linie_id, s.denumire_statie as denumire_statie, s.adresa as adresa FROM transport.statie s WHERE s.linie_id IN (8,9,10)";
                    $result = $db->query($sql);
                    while ($rows = mysqli_fetch_array($result)) {
                        //if ('linie_id' >= 8 and 'linie_id' <= 10) {
                        echo "<tr class=''>";
                        echo "<td>" . $rows['linie_id'] . "</td>";
                        echo "<td>" . $rows['denumire_statie'] . "</td>";
                        echo "<td>" . $rows['adresa'] . "</td>";
                        //}
                    }
                    ?>
                </table>
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