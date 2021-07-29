<?php

namespace PhpAlgorithm\Algorithm\Recursion;

class RecursionCategoryTree
{
    public static function buildTree(array $arr, $parent = 0): array
    {
        $tree = array();
        foreach ($arr as $item) {
            if ($item['parentId'] == $parent) {
                $children = self::buildTree($arr, $item['id']);
                if (!empty($children)) {
                    $item['children'] = $children;
                }
                $tree[] = $item;
            }
        }
        return $tree;
    }
}
