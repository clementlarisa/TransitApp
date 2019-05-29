<?php
include_once('controller-cfr-adauga-bilet.php');

use PHPUnit\Framework\TestCase;

final class test_controller_cfr_adauga_bilet extends TestCase
{
    public function test_add_ticket()
    {
        $cod = uniqid();
        $clasa = 2;
        $vagon = rand(1, 10);
        $loc = rand(1, 100);
        $linie_id = 8;
        $statie_plecare = 'Bucuresti Nord';
        $ora_plecare = '10:00';
        $statie_sosire = 'Buzau';
        $ora_sosire = '12:58';
        $username = 4;

        $result = add_ticket($cod, $clasa, $vagon, $loc, $linie_id, $statie_plecare, $ora_plecare, $statie_sosire, $ora_sosire, $username);

        $this->assertTrue($result);
    }
}