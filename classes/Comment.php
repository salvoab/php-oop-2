<?php

/**
 * class Comment
 * Model for a Comment of the blog
 */
class Comment {
    private static $counter = 0;

    private $id;
    private $userID;
    private $authorID;
    private $body;

    public function __construct(int $userID, int $authorID, string $body) {
        // Simulazione di un Autoincrement del database con una variabile statica e privata della classe Comment
        $this->id = Comment::$counter + 1;
        Comment::$counter++;

        $this->userID = $userID;
        $this->authorID = $authorID;
        $this->body = $body;
    }

    // Getter
    public function getID()
    {
        return $this->id;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function getAuthorID()
    {
        return $this->authorID;
    }

    public function getBody()
    {
        return $this->body;
    }

    // Setter
    public function setTitle(string $body)
    {
        $this->body = $body;
    }
}