
<!DOCTYPE html>
<?php include ('server.php'); ?>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
    if($_SESSION['logged_in']){
?>
    <script src = "JS/menuAfterLogin.js"></script>
<?php } else { ?>
    <script src = "JS/menu.js"></script>
<?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-sm" style="color: ">
                <h2>Abonamente</h2>
            </div>
        </div>
        <div class = "row">
            <div class="col-sm">
                One of three columns
            </div>
        </div>
        <div class = row>
            <div class="col-sm">
                One of three columns
            </div>
        </div>
    </div>
</body>
