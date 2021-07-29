<?php

namespace PhpAlgorithm\Tests\Algorithm;

use PhpAlgorithm\Tests\BaseTestCase;
use PhpAlgorithm\Algorithm\Recursion\RecursionSplIterator;

class RecursionSplIteratorTest extends BaseTestCase
{
    public function testScanDirectoryRecursion()
    {
        $mydir = '.';

        $fileList = RecursionSplIterator::scanDirs($mydir);
        $currentFilePath = realpath(__FILE__);
        
        $this->assertNotEmpty($fileList, 'Should be list all files in current directory');
        $this->assertTrue(in_array($currentFilePath, $fileList));
    }
}