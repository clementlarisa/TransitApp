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
            <div class="row mt-5">
                <div class="col-md-auto bg-light">
                    <script src ="JS/myAccountVertMenu.js"></script>
                </div>
                <div class="col-sm">
                    
                </div>
            </div>
        </div>

        </body>
        </html>
        <?php } else {
                        header('location:login.php');
                     } ?>