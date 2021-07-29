<?php

namespace PhpAlgorithm\Tests\Algorithm;

use PhpAlgorithm\Tests\BaseTestCase;
use PhpAlgorithm\Algorithm\Recursion\RecursionWithArray;

class RecursionWithArrayTest extends BaseTestCase
{
    protected function setUp(): void
    {
        $this->RecursionWithArray = new RecursionWithArray();
    }

    protected function tearDown(): void
    {
        unset($this->RecursionWithArray);
    }

    public function provideArrayRecursive()
    {
        // [$arr, $expected]
        return [
            [
                [1, 2, 3, 4, 5, [6, 7, [8, 9, 10, [11, 12, 13, [14, 15, 16]]]]],
                136
            ],
            [
                [1, 2, 3, 4, 5, [6, 7, [8, 9, 10, [11, 12, 13,]]]],
                91
            ],
            [
                [1, 2, 3, 4, 5, [6, 7, [8, 9, 10]]],
                55
            ],
        ];
    }

    /**
     * @dataProvider provideArrayRecursive
     */
    public function testArraySumRecursion(array $arr, $expected)
    {
        $sum = $this->RecursionWithArray::arraySumRecursive($arr);
        $this->assertEquals(
            $expected,
            $sum,
            "When summing array recursive should be equal {$expected}"
        );
    }
}