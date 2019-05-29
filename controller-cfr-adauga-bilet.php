<?php
function add_ticket($cod, $clasa, $vagon, $loc, $linie_id, $statie_plecare, $ora_plecare, $statie_sosire, $ora_sosire, $username)
{

    $db = mysqli_connect('localhost', 'root', '', 'transport');

    $sql = "INSERT INTO transport.bilete (bilet_id, clasa, vagon, loc, user_id, linie_id, statie_plecare, ora_plecare, statie_sosire, ora_sosire)
            VALUES ('$cod','$clasa','$vagon', '$loc', '$username', '$linie_id', '$statie_plecare','$ora_plecare','$statie_sosire','$ora_sosire');";

    $result = mysqli_query($db, $sql);
    return $result;
}
