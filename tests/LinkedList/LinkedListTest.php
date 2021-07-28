<?php

namespace PhpAlgorithm\Tests\Struct;

use PhpAlgorithm\Tests\BaseTestCase;
use PhpAlgorithm\DataStructure\LinkedList\{
    ListNode,
    LinkedList
};

class LinkedListTest extends BaseTestCase 
{
    protected function setUp(): void
    {
        $this->BookTitles = new LinkedList();
    }

    protected function tearDown(): void
    {
        unset($this->BookTitles);
    }

    public function testInsertToLinkedList()
    {
        $this->BookTitles->insert("Introduction to Algorithm"); 
        $this->BookTitles->insert("Introduction to PHP and Data structures"); 
        $this->BookTitles->insert("Programming Intelligence");

        $this->assertEquals(3, $this->BookTitles->getTotalNode());
    }

    public function testSearchFromLinkedList()
    {
        $this->BookTitles->insert("PHP Data structures and Algorithm"); 
        $this->BookTitles->insert("Learn Laravel 8");

        $foundANode = $this->BookTitles->search("Learn Laravel 8");
        $notFoundANode = $this->BookTitles->search("Learn PHP");
        
        $this->assertInstanceOf(ListNode::class, $foundANode);
        $this->assertFalse($notFoundANode);
    }
}