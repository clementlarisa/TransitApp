<?php
include_once('controller-cfr-mersul-trenurilor.php');

use PHPUnit\Framework\TestCase;

final class test_controller_cfr_mersul_trenurilor extends TestCase
{
    public function test_get_all_routes()
    {
        $result = get_all_routes();
        $this->assertTrue($result->num_rows > 0);
        $row1 = $result->fetch_assoc();
        $this->assertArrayHasKey('linie_id', $row1);
        $this->assertLessThanOrEqual(10, $row1['linie_id']);
        $this->assertGreaterThanOrEqual(8, $row1['linie_id']);
    }
}