<?php include ('server.php');
if($_SESSION['logged_in']){
    ?>
    <DOCTYPE html>
        <html>
        <head>
            <title><?php echo $_SESSION['first_name'] ."'s".' ' . 'Account'?></title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>
        <body>
        <script src = "JS/menuAfterLogin.js"></script>
        <div class="container">
            <div class="row  bg-light">
                <div class="col-md-auto mt-5">
                    <script src ="JS/myAccountVertMenu.js"></script>
                </div>
                <div class="col-sm mt-5">
                    <center><h2 class="mx-auto">
                        Detalii cont
                    </h2></center>
                    <div style = "display: inline"><p><img src="Imagini/person.png" style = "height: 2%; width: 2%"><?php echo $_SESSION['last_name'] . ' ' . $_SESSION['first_name'] ?></p></div>
                    <div style = "display: inline"><p><img src="Imagini/birthday.png" style = "height: 2%; width: 2%"><?php echo $_SESSION['birthdate'] ?></p></div>
                    <div style = "display: inline"><p><img src="Imagini/email.png" style = "height: 2%; width: 2%"><?php echo $_SESSION['email'] ?></p></div>
                    <div style = "display: inline"><p><img src="Imagini/telephone.png" style = "height: 2%; width: 2%"><?php echo $_SESSION['telephone'] ?></p></div>
                </div>
            </div>
        </div>

        </body>
        </html>
        <?php } else {
                        header('location:login.php');
                     } ?>