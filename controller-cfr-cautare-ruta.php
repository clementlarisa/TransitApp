<?php
    function get_routes($plecare, $sosire)
    {

        $db = mysqli_connect('localhost', 'root', '', 'transport');
        //cautare statie cfr
            $show = "SELECT P.linie_id AS linie_id, P.ora_plecare AS ora_plecare, S.ora_sosire AS ora_sosire,
                                P.denumire_statie AS statie_plecare, S.denumire_statie AS statie_sosire
                                FROM transport.statie P 
                                INNER JOIN transport.statie S 
                                ON P.linie_id = S.linie_id
                                WHERE p.denumire_statie ='$plecare' 
                                AND S.denumire_statie = '$sosire'
                             ";
            $result = mysqli_query($db, $show);
            return $result;
    }
