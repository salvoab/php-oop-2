<?php

include_once __DIR__ . '/User.php';

/**
 * class Author
 * The author in the blog
 * @author salvoab
*/
class Author extends User{
    private static $counter=0;

    private $id;
    private $userID;

    public function __construct(string $name, string $lastName, string $email, string $username, string $password, int $userID) {
        parent::__construct($name, $lastName, $email, $username, $password);
        
        // Simulazione di un Autoincrement del database con una variabile statica e privata della classe Author
        $this->id = Author::$counter + 1;
        Author::$counter++;

        $this->userID = $userID;
    }

    /**
     * Crea un articolo e lo inserisce nel database
     */
    public function writeArticle()
    {
        //Crea un oggetto Article e lo inserisce nel database
    }

    /**
     * Cancella un articolo dal database
     * @param object $article Articolo da cancellare
     */
    public function deleteArticle(object $article)
    {
        //Cancella l'articolo dal database
    }

    /**
     * Modifica un articolo
     * @param object $article Articolo da modificare
     */
    public function modifyArticle(object $article)
    {
        //Modifica l'articolo e aggiorna il database
    }
}