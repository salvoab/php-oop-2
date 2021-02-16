<?php

/**
 * class Article
 * Model for an Article of the blog
 */
class Article {
    private static $counter = 0;

    private $id;
    private $authorID;
    private $title;
    private $content;
    private $published;

    public function __construct(int $authorID, string $title, string $content, bool $published=false) {
        // Simulazione di un Autoincrement del database con una variabile statica e privata della classe Article
        $this->id = Article::$counter + 1;
        Article::$counter++;

        $this->authorID = $authorID;
        $this->title = $title;
        $this->content = $content;
        $this->published = $published;
    }

    // Getter
    public function getID()
    {
        return $this->id;
    }

    public function getAuthorID()
    {
        return $this->authorID;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getPublished()
    {
        return $this->published;
    }

    // Setter
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function setPublished(bool $published)
    {
        $this->published = $published;
    }
}