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
        <form method="post" action="change_username.php">
            <center><h2>Schimbare username</h2></center>
            <hr/>
            <?php
            if(isset($successMsg)){
                ?>
                <div class="alert alert-success">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    <?php echo $successMsg; ?>
                </div>
                <?php
            }
            ?>


            <div class="form-group">
                <label >Username:</label>
                <input type="text" name="username" class="form-control" autocomplete="off" >
            </div>


            <div class="form-group">
                <center><input type="submit" name="change_username" value="Schimbare username" class="btn btn-primary"></center>
            </div>
            <hr/>
            <a href="my_account_edit.php">Back</a>
        </form>
    </div>
</div>







</body>
</html>