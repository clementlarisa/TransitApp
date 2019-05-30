
<!DOCTYPE html>
<?php include ('server.php'); ?>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        .title-image{
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .text-image{
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: medium;
            font-weight: bold;
            transform: translate(-50%, -50%);
        }
        .a{
            color: black;
            font-style: italic;
        }
        /*@media screen and (max-width: 1000px){
            .text-image{
                position: initial;
                margin-top:50%;
                font-size: medium;
                font-weight: bold;
            }
            .title-image{
                position: absolute;
                top: 10%;
                transform: translate(-50%, -50%);
            }

        }
*/
    </style>
</head>
<body>
<?php
    if($_SESSION['logged_in']){
?>
    <script src = "JS/menuAfterLogin.js"></script>
<?php } else { ?>
    <script src = "JS/menu.js"></script>
<?php } ?>
    <div class="ml-5 mr-5" style = "width:100% float: left">
        <div class="row" >
            <div class="col-sm">
                <img src = "Imagini/PrimaImagineHome.jpg" style = "width:100%">
                <h2 class="title-image">Totul este mai usor acum</h2>
                <p class = "text-image">Cu ajutorul aplicatiei noastre vei putea accesa toata reteaua de transport in comun din Bucuresti si toata reteaua de trenuri
                                        din Romania. De acum gata cu statul la coada si mersul dupa abonamente, de acum cu un simplu click iti poti cumpara abonamentele
                                        si biletele de tren. Incearca si tu chiar azi!</p>

                <p class="text-image" style = "top:90%"><a href="login.php" class = "a">Conecteaza-te</a> sau <a href="new_user.php" class = "a">Inregistreaza-te</a> </p>
            </div>
        </div>
        <div class = "row">
            <div class="col-sm">
                <img src = "Imagini/SecondImageHome.jpg" style = "width:100%">
                <h2 class="title-image">Autobuz, tramvai, troleu?</h2>
                <p class = "text-image">Indiferent de mijlocul de transport in comun pe care il preferi, cu abonamentul STB poti calatori pe oricare dintre liniile disponibile, fara sa iti faci nicio grija! Ai nevoie doar de codul unic cu care vine acesta pentru validarea in cazul unui control.</p>

                <p class="text-image" style = "top:90%"><a href="login.php" class = "a">Conecteaza-te</a> sau <a href="new_user.php" class = "a">Inregistreaza-te</a> </p>
            </div>
        </div>
        <div class = row>
            <div class="col-sm">
                <img src = "Imagini/ThirdImageHome.jpg" style = "width:100%">
                <h2 class="title-image">Mergi cu metroul in fiecare zi?</h2>
                <p class = "text-image">Cum metroul reprezinta cel mai utilizat mijloc de transport in comun in Bucuresti, cu siguranta ai observat aglomeratia de la casele de bilete si mai ales de la cele destinate eliberarii abonamentelor de studenti. Acum poti obtine abonamentul in doar cateva minute!</p>

                <p class="text-image" style = "top:90%"><a href="login.php" class = "a">Conecteaza-te</a> sau <a href="new_user.php" class = "a">Inregistreaza-te</a> </p>
            </div>
        </div>
        <div class = row>
            <div class="col-sm">
                <img src = "Imagini/FourthImageHome.jpg" style = "width:100%">
                <h2 class="title-image">Mersul acasa a devenit un chin?</h2>
                <p class = "text-image">Ca student, probabil ai trecut prin stresul de a prinde bilet pentru a merge acasa de sarbatori, iar asta presupune cumpararea acestuia cu cel putin 2 saptamani inainte. Insa de multe ori programul de la facultate nu iti permite sa te deplasezi pana la gara. Acum, biletul tau se afla la doar cateva click-uri distanta!</p>

                <p class="text-image" style = "top:90%"><a href="login.php" class = "a">Conecteaza-te</a> sau <a href="new_user.php" class = "a">Inregistreaza-te</a> </p>
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
