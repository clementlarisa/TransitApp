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
                <center><h2 class="mx-auto">Abonamentele mele</h2></center>
                <?php
                $user_id = "user_id";
                $query = "SELECT tip_id FROM abonament WHERE user_id = '$_SESSION[$user_id]'";
                $results = mysqli_query($db, $query);
                if(mysqli_num_rows($results) > 0) {
                    $nns = [];
                    $nns2 = [];
                    $k = 0;
                    while ($nn = mysqli_fetch_assoc($results)) {
                        $nns[$k] = $nn['tip_id'][$k];
                        $k +=1;
                    }
                    echo "<table class = 'history'>";
                    echo "<tr>" . "\n" . "<th></th>" . "<th>Tip abonament</th>" . "<th>Valabilitate</th>" . "<th></th>" . "</tr>";
                    for ($i = 0; $i < count($nns); $i += 1) {

                        echo "<tr>";
                        if($nns[$i] == 1){
                            echo "<td>" . "<img src = 'Imagini/bus_2-512.png' style = 'width: 50px; height: 50px;'>" . "</td>";
                        }
                        else if($nns[$i] == 2){
                            echo "<td>" . "<img src = 'Imagini/metrou.png'  style = 'width: 50px; height: 50px;'>" . "</td>";
                        }
                        else{
                            echo "<td>" . "<img src = 'Imagini/tren.png'  style = 'width: 50px; height: 50px;'>" . "</td>";
                        }
                        $id_tip = $nns[$i];
                        $query = "SELECT nume_tip FROM tip_transport WHERE tip_id = '$id_tip'";
                        $results2 = mysqli_query($db, $query);
                        $nn2 = mysqli_fetch_assoc($results2);
                        $nume_tip =  $nn2['nume_tip'];
                        echo "<td>" . $nume_tip . "</td>";
                        $query = "SELECT expiration_date FROM abonament WHERE user_id = '$_SESSION[$user_id]' and tip_id = '$id_tip'";
                        $results3 = mysqli_query($db, $query);
                        $nn3 = mysqli_fetch_assoc($results3);
                        $expiration_date = $nn3['expiration_date'];
                        echo "<td>" . $expiration_date . "</td>";
                        if($expiration_date < date("Y-m-d"))
                        {
                            echo "<td style = 'color:red'> Expirat </td>";
                        }
                        else if($_SESSION['beginDate']> date("Y-m-d")){
                            echo "<td style = 'color: blue'> Inca nu este activ!</td>";
                        }
                            else{
                                echo "<td style = 'color: green'> Valabil</td>";
                            }
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "<center><p>Nu aveti abonamente create!</p></center>";
                }
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