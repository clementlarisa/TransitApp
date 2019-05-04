<?php
    include ("server.php");
    $user_id = 'user_id';
    $query = "DELETE FROM user WHERE id_user = '$_SESSION[$user_id]'";
    mysqli_query($db, $query);
    $_SESSION['logged_in'] = 0;
    header('location: home.php');
?>