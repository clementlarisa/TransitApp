<?php
include_once('server.php');

?>

<html>
<head>
    <title>Adaugare ospatar</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>

<div class="container">
    <div style="width: 500px; margin: 50px auto;">
        <form method="post" action="change_password.php">
            <center><h2>Schimbare parola</h2></center>
            <hr/>
            <?php
            if (isset($successMsg)) {
                ?>
                <div class="alert alert-success">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    <?php echo $successMsg; ?>
                </div>
                <?php
            }
            ?>

            <div class="form-group">
                <label>Parola:</label>
                <input type="password" name="password1" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Confirma parola:</label>
                <input type="password" name="password2" class="form-control" autocomplete="off">
            </div>

            <div class="form-group">
                <center><input type="submit" name="change_password" value="Schimbare parola" class="btn btn-primary">
                </center>
            </div>
            <hr/>
            <a href="my_account_edit.php">Back</a>
        </form>
    </div>
</div>


</body>
</html>