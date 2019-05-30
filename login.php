<?php
include('server.php');
?>

<html>
<head>
<title>Login</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>
    <div class="container">
        <div style = "margin-top:10px">
            <img src="Imagini/LogoMakr_6xUTaB.png" style = "width: 12%; height: 10%;">
            <h1 style = "display: inline; margin-left:5px">Student Transport</h1>
        </div>
        <div style="width: 500px; margin: 50px auto;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                <center><h2>Login</h2></center>
				<center><h3>Introdu username si parola</h3></center>
                <hr/>
                <?php
                    if(isset($errorMsg)){
                        ?>
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <?php echo $errorMsg; ?>
                        </div>
                        <?php
                    }
                ?>
				<?php include('errors.php'); ?>
                <div class="form-group">
                    <label for="username" class="control-label">username</label>
                    <input type="username" name="username" class="form-control" autocomplete="off">
                    <span class="text-danger"><?php if(isset($errorID)) echo $errorID; ?></span>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Parola</label>
                    <input type="password" name="password" class="form-control" autocomplete="off">
                    <span class="text-danger"><?php if(isset($errorPassword)) echo $errorPassword; ?></span>
                </div>
                <div class="form-group">
                    <center><input type="submit" name="login_user" value="Login" class="btn btn-primary"></center>
                </div>
                <hr/>
				<p>
			<a href="new_user.php">Register User</a>
		</p>
            </form>
        </div>
    </div>
</body>
</html>