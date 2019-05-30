<?php
include_once('controller-stb-statii.php');

use PHPUnit\Framework\TestCase;

final class test_controller_stb_statii extends TestCase
{
    public function test_get_statii()
    {
        $linie_id = 2;
        $result = get_statii($linie_id);

        $this->assertTrue($result->num_rows > 0);

        $row1 = $result->fetch_assoc();
        $this->assertEquals(2, $row1['linie_id']);
        while ($fieldinfo = $result->fetch_field()) {
            if ($fieldinfo->name == 'ora_sosire') {
                $this->assertEmpty($fieldinfo->name);
            }
        }
    }
}