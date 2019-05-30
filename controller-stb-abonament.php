<?php
include_once('server.php');
function get_abonament($user_id, $username)
{

    $db = mysqli_connect('localhost', 'root', '', 'transport');
    //cautare statie cfr
    $query = "SELECT abon_id, expiration_date, begin_date FROM abonament WHERE user_id = $username AND tip_id = 1 ";
    $result = mysqli_query($db, $query);
    return $result;
}
