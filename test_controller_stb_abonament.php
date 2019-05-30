<?php
include_once('controller-stb-abonament.php');

use PHPUnit\Framework\TestCase;

final class test_controller_stb_abonament extends TestCase
{
    public function test_get_abonament()
    {
        $user_id = 1;
        $username = 1;
        $result = get_abonament($user_id, $username);
        $this->assertTrue($result->num_rows > 0);

        $this->assertGreaterThanOrEqual(3, $result->field_count);
        $this->assertCount(3, $result->fetch_fields());
    }
}