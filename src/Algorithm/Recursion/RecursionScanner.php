<?php

namespace PhpAlgorithm\Algorithm\Recursion;

class RecursionScanner
{
    public static function scanDirs(string $dirName, Array &$allFiles = []) { 
        $files = scandir($dirName); 
        foreach ($files as $key => $value) { 
            $path = realpath($dirName . DIRECTORY_SEPARATOR . $value); 
            if (!is_dir($path)) { 
                $allFiles[] = $path; 
            } else if ($value != "." && $value != "..") { 
                self::scanDirs($path, $allFiles); 
                $allFiles[] = $path; 
            } 
        } 
        return; 
    }
}