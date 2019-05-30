<?php
function get_statii($linie_id)
{
    $db = mysqli_connect('localhost', 'root', '', 'transport');

    $show = "SELECT P.statie_id as statie_id ,P.linie_id AS linie_id, P.denumire_statie AS denumire_statie, P.adresa AS adresa
                            FROM transport.statie P 
                            WHERE p.linie_id ='$linie_id' 
                         ";
    $result = mysqli_query($db, $show);
    return $result;
}
