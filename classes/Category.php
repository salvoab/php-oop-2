<?php

/**
 * class Category
 * Model for an article's Category in the blog
 */
class Category {
    private static $counter = 0;

    private $id;
    private $name;
    private $desctiption;

    public function __construct(string $name, string $desctiption) {
        // Simulazione di un Autoincrement del database con una variabile statica e privata della classe Category
        $this->id = Category::$counter + 1;
        Category::$counter++;

        $this->name = $name;
        $this->description = $description;
    }

    // Getter
    public function getID()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->desctiption;
    }

    // Setter
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}