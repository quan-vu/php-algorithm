<?php

namespace PhpAlgorithm\Tests\Struct;

use PhpAlgorithm\Tests\BaseTestCase;
use PhpAlgorithm\DataStructure\Struct\PlayerStructClass;

class PlayerStructTest extends BaseTestCase 
{
    public function testCreateStructInstance()
    {
        $ronaldo = new PlayerStructClass();
        $ronaldo->name = "Ronaldo";
        $ronaldo->country = "Portugal";
        $ronaldo->age = 31;
        $ronaldo->currentTeam = "Real Madrid";

        $this->assertEquals("Ronaldo", $ronaldo->name);
        $this->assertEquals("Portugal", $ronaldo->country);
        $this->assertEquals(31, $ronaldo->age);
        $this->assertEquals("Real Madrid", $ronaldo->currentTeam);
    }
}