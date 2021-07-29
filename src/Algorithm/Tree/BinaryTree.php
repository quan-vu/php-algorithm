<?php

/**
 * Implementing a binary tree
 * 
 * The key factor to have in a binary tree is that we must have two placeholders 
 * for the left child node and the right child node, 
 * along with the data we want to store in the node. 
 */

namespace PhpAlgorithm\Algorithm\Tree;

class BinaryNode
{
    public $data;
    public $left;
    public $right;

    public function __construct(string $data = NULL)
    {
        $this->data = $data;
        $this->left = NULL;
        $this->right = NULL;
    }

    public function addChildren(BinaryNode $left, BinaryNode $right)
    {
        $this->left = $left;
        $this->right = $right;
    }
}

class BinaryTree
{
    public $root = NULL;

    public function __construct(BinaryNode $node)
    {
        $this->root = $node;
    }

    public function traverse(BinaryNode $node, int $level = 0)
    {
        if ($node) {
            echo str_repeat("-", $level);
            echo $node->data . PHP_EOL;

            if ($node->left) {
                $this->traverse($node->left, $level + 1);
            }
            if ($node->right) {
                $this->traverse($node->right, $level + 1);
            }
        }
    }

}

class BinaryTreeUseArray { 

    public $nodes = []; 

    public function __construct(Array $nodes) { 
      $this->nodes = $nodes; 
    } 

    public function traverse(int $num = 0, int $level = 0) { 

      if (isset($this->nodes[$num])) { 
          echo str_repeat("-", $level); 
          echo $this->nodes[$num] . "\n"; 

          $this->traverse(2 * $num + 1, $level+1); 
          $this->traverse(2 * ($num + 1), $level+1); 
      } 
    } 

} 

// Example 1: A Study programme as binary tree
$final = new BinaryNode("Final"); 

$tree = new BinaryTree($final); 

$semiFinal1 = new BinaryNode("Semi Final 1"); 
$semiFinal2 = new BinaryNode("Semi Final 2"); 
$quarterFinal1 = new BinaryNode("Quarter Final 1"); 
$quarterFinal2 = new BinaryNode("Quarter Final 2"); 
$quarterFinal3 = new BinaryNode("Quarter Final 3"); 
$quarterFinal4 = new BinaryNode("Quarter Final 4"); 

$semiFinal1->addChildren($quarterFinal1, $quarterFinal2); 
$semiFinal2->addChildren($quarterFinal3, $quarterFinal4); 

$final->addChildren($semiFinal1, $semiFinal2); 

$tree->traverse($tree->root); 

// Example 2: Binary tree as an array
$nodes = []; 
$nodes[] = "Final"; 
$nodes[] = "Semi Final 1"; 
$nodes[] = "Semi Final 2"; 
$nodes[] = "Quarter Final 1"; 
$nodes[] = "Quarter Final 2"; 
$nodes[] = "Quarter Final 3"; 
$nodes[] = "Quarter Final 4"; 

$treeUseArray = new BinaryTreeUseArray($nodes);

$treeUseArray->traverse();