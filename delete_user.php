<?php
include("server.php");
?>

<html>
<head>
    <title>Stergere cont</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>

<div class="container">
    <div style="width: 500px; margin: 50px auto;">
        <form method="post" action="delete_user.php">
            <center><h2>Sunteti sigur ca doriti sa stergeti contul? Modificarile sunt permanente!</h2></center>
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

            <div class="row">
                <div class="col">
                    <a href="my_account.php"><input type="button" class="form-control btn btn-primary" value="Nu"></a>
                </div>
                <div class="col">
                    <input type="submit" name="delete_user" value="Da" class=" form-control  btn btn-primary"
                           style="background-color: red">
                </div>
            </div>
            <hr/>
        </form>
    </div>
</div>

</body>
</html>
