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
            <form method="post" action="new_user.php">
                <center><h2>Inregistrare User</h2></center>
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
					<label >Nume:</label>
					<input type="text" name="first_name" class="form-control" autocomplete="off" >
				</div>
                <div class="form-group">
                    <label >Prenume:</label>
                    <input type="text" name="last_name" class="form-control" autocomplete="off" >
                </div>
				<div class="form-group">
					<label >Username:</label>
					<input type="text" name="username" class="form-control" autocomplete="off" >
				</div>
                <div class="form-group">
                    <label >Data de nastere(zz-ll-aaaa):</label>
                    <input type="text" name="birthdate" class="form-control" autocomplete="off" >
                </div>
				<div class="form-group">
					<label>Parola:</label>
					<input type="password" name="password_1" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Confirma parola:</label>
					<input type="password" name="password_2" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label >email:</label>
					<input type="text" name="email" class="form-control" autocomplete="off" >
				</div>
                <div class="form-group">
                    <label >Telefon:</label>
                    <input type="text" name="telephone" class="form-control" autocomplete="off" >
                </div>
				<div class="form-group">
                    <label >cnp:</label>
                    <input type="text" name="cnp" class="form-control" autocomplete="off" >
                </div>
                <div class="form-group">
                    <label >Numar legitimatie:</label>
                    <input type="text" name="nr_legitimatie" class="form-control" autocomplete="off" >
                </div>
				
                
                <div class="form-group">
                    <center><input type="submit" name="reg_user" value="Inregistrare" class="btn btn-primary"></center>
                </div>
                <hr/>
                <a href="login.php">Login</a>
                <a href ="home.php">Home</a>
            </form>
        </div>
    </div>
	
	
	
	


	
</body>
</html>