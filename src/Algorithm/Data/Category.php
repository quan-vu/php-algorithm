<?php

namespace PhpAlgorithm\Algorithm\Data;

/**
 * Category object
 */

class Category
{
    private int $id;
    private string $name;
    private int $parentId;

    public function __construct(int $id, string $name, int $parentId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->parentId = $parentId;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of parentId
     */ 
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set the value of parentId
     *
     * @return  self
     */ 
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'parentId' => $this->parentId,
        ];
    }
}