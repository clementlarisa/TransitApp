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
               <?php
                    $user_id = "user_id";
                    $query = "SELECT linie_id FROM statie s JOIN isoric i ON (s.statie_id=i.statie_id) WHERE user_id = '$_SESSION[$user_id]'";
                    $results = mysqli_query($db, $query);
                    $nns = [];
                    $nns2 = [];
			        while($nn = mysqli_fetch_assoc($results))
                    {
                        $nns[] = $nn;
                    }
			        echo "<table class = 'history'>";
                    echo "<tr>" . "\n" . "<th>Numar</th>" . "<th>Denumire linie</th>";
			        for($i = 0; $i<count($nns); $i += 1){
			            echo "<tr>";
                        echo "<td>" . ($i+1) . "</td>";
                        $id_linie = $nns[$i]['id_linie'];
                        $query ="SELECT denumire_linie FROM linie WHERE linie_id = '$id_linie'";
                        $results2 = mysqli_query($db, $query);
                        while($nn2 = mysqli_fetch_assoc($results2)){
                            $nns2[] = $nn2;
                        }
                        for ($j=0;$j<count($nns2);$j+=1)
                        {
                            echo "<td>" . $nns2[$j]['denumire_linie'] . "</td>";
                        }
                        echo "</tr>";
                    }
			        echo "</table>";
               ?>
            </div>
        </div>
    </div>
    <script src="JS/footer.js"></script>

    </body>
    </html>
<?php } else {
    header('location:login.php');
             }?>