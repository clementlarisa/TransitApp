<?php include('server.php');
if ($_SESSION['logged_in']) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>CFR</title>
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    if ($_SESSION['logged_in']) {
        ?>
        <script src="JS/menuAfterLogin.js"></script>
    <?php } else { ?>
        <script src="JS/menu.js"></script>
    <?php } ?>
    <div class="container bg-dark" style="height:100%;">
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