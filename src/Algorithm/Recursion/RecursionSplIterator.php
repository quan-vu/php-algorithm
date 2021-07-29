<?php

namespace PhpAlgorithm\Algorithm\Recursion;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

/**
 * Using SPL recursive iterators
 * 
 * The Standard PHP Library SPL has many built-in iterators for recursion purposes. 
 * We can use them as per our need, without taking the pain of implementing them from scratch. 
 * 
 * Here is the list of iterators and their functionality:
 * 
 * - RecursiveArrayIterator: 
 *      This recursive iterator allows iterating over any type of array or objects and modifying the key or values or unsetting them. 
 *      It also allows iterating over the current iterator entry.
 * - RecursiveCallbackFilterIterator: 
 *      If we are looking forward to applying a callback recursively to any array or objects, this iterator can be very helpful.
 * - RecursiveDirectoryIterator: 
 *      This iterator allows iterating any directory or filing systems. 
 *      It makes the directory listing very easy. For example, we can rewrite the directory listing program we wrote in this chapter easily using this iterator:
 */

class RecursionSplIterator
{
    public static function scanDirs(string $dirName): array
    {
        $path = realpath($dirName); 
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($path), 
            RecursiveIteratorIterator::SELF_FIRST
        );
        return iterator_to_array($files);
    }
}