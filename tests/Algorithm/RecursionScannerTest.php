<?php

namespace PhpAlgorithm\Tests\Algorithm;

use PhpAlgorithm\Tests\BaseTestCase;
use PhpAlgorithm\Algorithm\Recursion\RecursionScanner;

class RecursionScannerTest extends BaseTestCase
{
    public function testScanDirectoryRecursion()
    {
        $mydir = '.';
        $fileList = [];

        $currentFilePath = realpath(__FILE__);
        RecursionScanner::scanDirs($mydir, $fileList);

        $this->assertNotEmpty($fileList, 'Should be list all files in current directory');
        $this->assertTrue(in_array($currentFilePath, $fileList));
    }
}