<?php

namespace PhpAlgorithm\Tests\Algorithm;

use PhpAlgorithm\Tests\BaseTestCase;
use PhpAlgorithm\Algorithm\Recursion\RecursionCategoryTree;
use PhpAlgorithm\Algorithm\Data\Category;

class RecursionCategoryTreeTest extends BaseTestCase
{
    protected function setUp(): void
    {
        $this->RecursionCategoryTree = new RecursionCategoryTree();
    }

    protected function tearDown(): void
    {
        unset($this->RecursionCategoryTree);
    }

    public function provideCategoryList()
    {
        return [
            // dataset #1
            [
                // list of categories as array
                [
                    ['id' => 1, 'name' => 'Category 1', 'parentId' => 0],
                    ['id' => 2, 'name' => 'Category 2', 'parentId' => 1],
                    ['id' => 3, 'name' => 'Category 3', 'parentId' => 1],
                ],
                // expected category tree as a array
                [
                    [
                        'id' => 1,
                        'name' => 'Category 1',
                        'parentId' => 0,
                        'children' => [
                            [
                                'id' => 2,
                                'name' => 'Category 2',
                                'parentId' => 1,
                            ],
                            [
                                'id' => 3,
                                'name' => 'Category 3',
                                'parentId' => 1,
                            ],
                        ]
                    ],
                ]
            ],
            // dataset #2
            [
                // list of categories as array
                [
                    (new Category(1, 'Category 1',0))->toArray(),
                    (new Category(2, 'Category 2',1))->toArray(),
                    (new Category(3, 'Category 3',1))->toArray(),
                    (new Category(4, 'Category 4',0))->toArray(),
                    (new Category(5, 'Category 5',4))->toArray(),
                    (new Category(6, 'Category 6',4))->toArray(),
                ],
                // expected category tree as a array
                [
                    [
                        'id' => 1,
                        'name' => 'Category 1',
                        'parentId' => 0,
                        'children' => [
                            [
                                'id' => 2,
                                'name' => 'Category 2',
                                'parentId' => 1,
                            ],
                            [
                                'id' => 3,
                                'name' => 'Category 3',
                                'parentId' => 1,
                            ],
                        ]
                    ],
                    [
                        'id' => 4,
                        'name' => 'Category 4',
                        'parentId' => 0,
                        'children' => [
                            [
                                'id' => 5,
                                'name' => 'Category 5',
                                'parentId' => 4,
                            ],
                            [
                                'id' => 6,
                                'name' => 'Category 6',
                                'parentId' => 4,
                            ],
                        ]
                    ],
                ]
            ]
        ];
    }

    /**
     * @dataProvider provideCategoryList
     */
    public function testGenerateCategoryTree(array $categoryList, array $expected)
    {
        $categoryTree = $this->RecursionCategoryTree->buildTree($categoryList);
        $this->assertEquals(
            $expected,
            $categoryTree,
            "When build category tree from list of categories."
        );
    }
}