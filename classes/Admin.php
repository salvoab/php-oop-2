<?php

include_once __DIR__ . '/User.php';

/**
 * class Admin
 * The admin of the blog
 * @author salvoab
*/
class Admin extends User{
    private static $counter=0;

    private $id;
    private $userID;

    public function __construct(string $name, string $lastName, string $email, string $username, string $password, int $userID) {
        parent::__construct($name, $lastName, $email, $username, $password);
        
        // Simulazione di un Autoincrement del database con una variabile statica e privata della classe Admin
        $this->id = Admin::$counter + 1;
        Admin::$counter++;

        $this->userID = $userID;
    }

    /**
     * Rende un articolo pubblico sul blog settando published a true
     * @param object $article Articolo da rendere published
     */
    public function publishArticle(object $article)
    {
        $article->published = true;
    }

    /**
     * Cancella un articolo dal database
     * @param object $article Articolo da cancellare
     */
    public function deleteArticle(object $article)
    {
        //Cancella l'articolo dal database
    }
}

/*
$testAdmin = new Admin("Franco", "Gialli", "frank@mail.com", "frank","psw3", 4);
$testAdmin2 = new Admin("Franco2", "Gialli2", "frank2@mail.com", "frank2","psw32", 3);

var_dump($testAdmin, $testAdmin2);*/