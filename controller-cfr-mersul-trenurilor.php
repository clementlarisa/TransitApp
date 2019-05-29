<?php
function get_all_routes()
{

    $db = mysqli_connect('localhost', 'root', '', 'transport');
    //afisare rute
    $sql = "SELECT s.linie_id as linie_id, s.denumire_statie as denumire_statie, s.adresa as adresa FROM transport.statie s WHERE s.linie_id IN (8,9,10)";
    $result = $db->query($sql);
    return $result;
}
