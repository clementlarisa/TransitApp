<?php 
if(!isset($_SESSION))
    { 
        session_start(); 
    }	

	// variable declaration
	$username = "";
    $last_name = "";
    $first_name = "";
    $password = "";
	$email    = "";
	$cnp = "";

	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'transport');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$first_name = mysqli_real_escape_string($db, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($db,$_POST['last_name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$cnp = mysqli_real_escape_string($db, $_POST['cnp']);
		

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
			$query = "INSERT INTO user(id_user, username, last_name,first_name, password,email, cnp )
								   VALUES(''	 ,'$username', '$last_name','$first_name', '$password', '$email', '$cnp') ";
			print $query;
			mysqli_query($db, $query);
			

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: login.php');
		}

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
			$query = "SELECT first_name FROM user WHERE username='$username' AND password='$password'";
			print $query;
			$results = mysqli_query($db, $query);
			$nn = mysqli_fetch_assoc($results);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['first_name'] = $nn['first_name'];

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

?>