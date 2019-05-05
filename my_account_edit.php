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
    </head>
    <body>
    <script src = "JS/menuAfterLogin.js"></script>
    <div class="container bg-light" style="height:100%;">
        <div class="row  bg-light">
            <div class="col-md-auto mt-5">
                <script src ="JS/myAccountVertMenu.js"></script>
            </div>
            <div class="col-sm mt-5">
                <center><h2 class="mx-auto">Schimbare detali cont</h2></center>
                <form>
                    <div>
                        <label class="mt-1">Schimba Username:</label>
                        <div>
                            <a href = "change_username.php">
                                <input type="button" value = "Schimbare Username" class="btn btn-primary">
                            </a>
                        </div>
                    </div>
                </form>
                <form>
                    <div>
                        <label class="mt-2">Schimbare Parola:</label>
                        <div >
                            <a href = "change_password.php">
                                <input type="button" value = "Schimbare Parola" class="btn btn-primary">
                            </a>
                        </div>
                    </div>
                </form>
                <form>
                    <div>
                        <label class = "mt-1">Email:</label>
                        <div>
                            <a href = "change_email.php">
                                <input type="button" value = "Schimbare Email" class="btn btn-primary">
                            </a>
                        </div>
                    </div>
                </form>
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
} ?>