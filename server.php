<?php 
if(!isset($_SESSION))
    { 
        session_start(); 
    }	

	// variable declaration
	$username = "";
    $last_name = "";
    $first_name = "";
    $birthdate = "";
    $password = "";
	$email    = "";
	$telephone = "";
	$cnp = "";
	$user_id="";

	$errors = array(); 
	$_SESSION['success'] = "";
	//$_SESSION['logged_in'] = "";
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'transport');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$first_name = mysqli_real_escape_string($db, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($db,$_POST['last_name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$birthdate = mysqli_real_escape_string($db,$_POST['birthdate']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$telephone = mysqli_real_escape_string($db,$_POST['telephone']);
		$cnp = mysqli_real_escape_string($db, $_POST['cnp']);
		$nr_legitimatie = mysqli_real_escape_string($db, $_POST['nr_legitimatie']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "INTRODU UN USERNAME"); }
		#if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "INTRODU O PAROLA"); }

		if ($password_1 != $password_2) {
			array_push($errors, "Cele doua parole nu se potrivesc");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			//$password = md5($password_1);//encrypt the password before saving in the database
            $password = $password_1;
			$query = "INSERT INTO user(id_user, username, last_name,first_name,birthdate, password,telephone,email, cnp, nr_legitimatie )
								   VALUES(''	 ,'$username', '$last_name','$first_name','$birthdate', '$password','$telephone', '$email', '$cnp' , '$nr_legitimatie') ";
			print $query;
			mysqli_query($db, $query);
			

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: login.php');
		}

	}

    if(isset($_POST['change_username'])){
        $user = 'user_id';
        $username = mysqli_real_escape_string($db , $_POST['username']);
        $query = "UPDATE user SET username = '$username' WHERE id_user = '$_SESSION[$user]'";
        $_SESSION['username'] = $username;
        print $query;
        mysqli_query($db, $query);
        header('location: login.php');
    }

    if(isset($_POST['change_password'])) {
        $password_1 = mysqli_real_escape_string($db, $_POST['password1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password2']);
        if (empty($password_1)) {
            array_push($errors, "INTRODU O PAROLA");
        }

        if ($password_1 != $password_2) {
            array_push($errors, "Cele doua parole nu se potrivesc");
        }
        if(count($errors)==0)
        {
            $user = 'user_id';
            $query = "UPDATE user SET password = $password_1 WHERE id_user = '$_SESSION[$user]'";
            mysqli_query($db,$query);
            header('location: login.php');
        }
    }

    if(isset($_POST['change_email'])){
        $user = 'user_id';
        $email = mysqli_real_escape_string($db , $_POST['email']);
        $query = "UPDATE user SET email = $email WHERE id_user = '$_SESSION[$user]'";
        print $query;
        mysqli_query($db, $query);
        header('location: login.php');
    }

    if(isset($_POST['delete_user'])){
        $user_id = 'user_id';
        $query = "DELETE FROM user , abonament , istoric WHERE id_user = '$_SESSION[$user_id]'";
        mysqli_query($db, $query);
        $_SESSION['logged_in'] = 0;
        header('location: home.php');
    }

	/*
	
	// EDIT USER
	if (isset($_POST['edit_user'])) {
		// receive all input values from the form
		$nume = mysqli_real_escape_string($db, $_POST['nume']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$admin = mysqli_real_escape_string($db, $_POST['admin']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "INTRODU UN USERNAME"); }
		#if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "INTRODU O PAROLA"); }

		if ($password_1 != $password_2) {
			array_push($errors, "Cele doua parole nu se potrivesc");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "UPDATE angajat 
					SET username = $username, Nume = $nume, email = $email,	password = $password, admin = $admin
					WHERE IDAngajat = 1 ";																				//TREBUIE PUS IDUL 
			mysqli_query($db, $query);
			

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: select_action.php');
		}

	}

	// // ADAUGARE CLIENT
	if (isset($_POST['reg_client'])) {
		// receive all input values from the form
		
		$nume = mysqli_real_escape_string($db, $_POST['nume']);
		$prenume = mysqli_real_escape_string($db, $_POST['prenume']);
		$reducere = mysqli_real_escape_string($db, $_POST['reducere']);
		$email = mysqli_real_escape_string($db, $_POST['email']);

		
			$query = "INSERT INTO client (IDClient, Nume, Prenume, Reducere, email) 
					  VALUES('', '$nume', '$prenume', '$reducere', '$email')";
			mysqli_query($db, $query);
			

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Client adaugat cu succes";
			header('location: select_action.php');
		}
	
	// // ADAUGARE PRODUS
	if (isset($_POST['reg_produs'])) {
		// receive all input values from the form
		
		$Nume = mysqli_real_escape_string($db, $_POST['Nume']);
		$Categorie = mysqli_real_escape_string($db, $_POST['Categorie']);
		$Pret = mysqli_real_escape_string($db, $_POST['Pret']);
		$Cantitate = mysqli_real_escape_string($db, $_POST['Cantitate']);
		$Categorie = $_POST['Categorie'];
		
			$query = "INSERT INTO produs (IDProdus, Categorie, Nume, Prenume, Pret, Cantitate) 
					  VALUES('', '$Categorie', '$Nume', '$Pret', '$Cantitate')";
			mysqli_query($db, $query);
			

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Produs adaugat cu succes";
			header('location: select_action.php');
		}

	*/

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		if (empty($username)) {
			array_push($errors, "INTRODU UN USERNAME");
		}
		if (empty($password)) {
			array_push($errors, "INTRODU O PAROLA");
		}

		
		if (count($errors) == 0) {
		
			//$password = md5($password);
			$query = "SELECT id_user,username, first_name , last_name ,birthdate, telephone, email , cnp  FROM user WHERE username='$username' AND password='$password'";
			print $query;
			$results = mysqli_query($db, $query);
			$nn = mysqli_fetch_assoc($results);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;

				$_SESSION['user_id'] = $nn['id_user'];
				$_SESSION['first_name'] = $nn['first_name'];
				$_SESSION['last_name'] = $nn['last_name'];
				$_SESSION['birthdate'] = $nn['birthdate'];
				$_SESSION['telephone'] = $nn ['telephone'];
				$_SESSION['email'] = $nn['email'];
				$_SESSION['cnp'] = $nn['cnp'];
                $_SESSION['logged_in'] = "1";
				$_SESSION['success'] = "You are now logged in";

				header('location: home.php');
			}else {
				array_push($errors, "USERNAME/PAROLA GRESITE");
			}
		}
	}
/*
	//LOGIN ADMIN
	if (isset($_POST['login_admin'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "INTRODU UN USERNAME");
		}
		if (empty($password)) {
			array_push($errors, "INTRODU O PAROLA");
		}

		
		if (count($errors) == 0) {
		
			$password = md5($password);
			$query = "SELECT * FROM angajat WHERE username='$username' AND password='$password' AND admin NOT IN (0) "; 
			
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				
				$_SESSION['success'] = "You are now logged in";
				header('location: select_action.php');
			}else {
				array_push($errors, "USERNAME/PAROLA GRESITE");
			}
		}
	}
*/

// Adaugare abonament
if (isset($_POST['save'])) {
    $expiration_date = mysqli_real_escape_string($db, $_POST['expirationDate']);
    $_SESSION['beginDate'] = $_POST['beginDate'];
    // $user_id=mysqli_real_escape_string($db,$_SESSION['user_id']);
    $user_id = 'user_id';
    //if(count($errors)==0){
        $query = "INSERT INTO abonament (abon_id, user_id, tip_id, expiration_date)
                                       VALUES('' , $_SESSION[$user_id] , 1 ,STR_TO_DATE('$expiration_date', '%m/%d/%Y')) ";
        print $_SESSION[$user_id];
        print $query;
        mysqli_query($db, $query);

           // $_SESSION['success'] = "Ai introdus cu succes un abonament";
        header('location: stb.php');
    //}


}


