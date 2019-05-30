<?php
include_once('controller-cfr-cautare-ruta.php');

use PHPUnit\Framework\TestCase;

final class test_controller_cfr_cautare_ruta extends TestCase
{
    public function test_get_routes()
    {
        $plecare = "Bucuresti Nord";
        $sosire = "Iasi";

        $result = get_routes($plecare, $sosire);

        $this->assertTrue($result->num_rows > 0);
        $row1 = $result->fetch_assoc();
        $this->assertArrayHasKey('statie_plecare', $row1);
        $this->assertEquals('Bucuresti Nord', $row1['statie_plecare']);
    }
}