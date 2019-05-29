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
                <th>Denumire Statie</th>
                <th>Adresa</th>
            </tr>
            <?php
            $result = get_all_routes();
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
    </body>
    <?php
    if ($_SESSION['logged_in']) {
        ?>
        <script src="JS/footer.js"></script>
    <?php } else { ?>
        <script src="JS/footerBeforeLogin.js"></script>
    <?php } ?>

    </html>
<?php } else {
    header('location:login.php');
} ?>