<?php

/**
 * class Tag
 * Model for an article's Tag in the blog
 */
class Tag {
    private static $counter = 0;

    private $id;
    private $name;
    private $desctiption;

    public function __construct(string $name, string $desctiption) {
        // Simulazione di un Autoincrement del database con una variabile statica e privata della classe Tag
        $this->id = Tag::$counter + 1;
        Tag::$counter++;

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