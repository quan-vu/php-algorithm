<?php

namespace PhpAlgorithm\DataStructure\LinkedList;

/**
 * LinkedList
 * 
 * This is an example of a singly linked list.
 * The last node contains the next link of a NULL, so that it marks the end of the list:
 */

class ListNode { 
    public $data = NULL; 
    public $next = NULL; 

    public function __construct(string $data = NULL) { 
        $this->data = $data; 
    } 
}

class LinkedList { 
    private $_firstNode = NULL; 
    private $_totalNode = 0; 

    public function insert(string $data = NULL) 
    { 
       $newNode = new ListNode($data); 

        if ($this->_firstNode === NULL) {           
            $this->_firstNode = &$newNode;             
        } else { 
            $currentNode = $this->_firstNode; 
            while ($currentNode->next !== NULL) { 
                $currentNode = $currentNode->next; 
            } 
            $currentNode->next = $newNode; 
        } 
        $this->_totalNode++; 
        return TRUE; 
    } 

    public function insertBefore(string $data = NULL, string $query = NULL) 
    { 
        $newNode = new ListNode($data); 

        if ($this->_firstNode) { 
            $previous = NULL; 
            $currentNode = $this->_firstNode; 
            while ($currentNode !== NULL) { 
                if ($currentNode->data === $query) { 
                    $newNode->next = $currentNode; 
                    $previous->next = $newNode; 
                    $this->_totalNode++; 
                    break; 
                } 
                $previous = $currentNode; 
                $currentNode = $currentNode->next; 
            } 
        } 
    } 

    public function search(string $data = NULL) 
    {
        if ($this->_totalNode) { 
            $currentNode = $this->_firstNode; 
            while ($currentNode !== NULL) { 
                if ($currentNode->data === $data) { 
                    return $currentNode; 
                } 
                $currentNode = $currentNode->next; 
            } 
        } 
        return FALSE; 
    }

    public function getTotalNode(): int
    {
        return $this->_totalNode;
    }

    public function display() 
    { 
      echo "Total book titles: ".$this->_totalNode."\n"; 
        $currentNode = $this->_firstNode; 
        while ($currentNode !== NULL) { 
            echo $currentNode->data . "\n"; 
            $currentNode = $currentNode->next; 
        } 
    } 
    
}