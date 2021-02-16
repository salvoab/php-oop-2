<?php

/**
 * class User
 * The user of the blog
 * @author salvoab 
*/
class User {
    private static $counter=0;

    private $id;
    protected $name;
    protected $lastName;
    protected $email;
    protected $username;
    protected $password;

    public function __construct(string $name, string $lastName, string $email, string $username, string $password) {
        // Simulazione di un Autoincrement del database con una variabile statica e privata della classe User
        $this->id = User::$counter + 1;
        User::$counter++;
        
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Restituisce lo username
     * @return string 
    */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Modifica lo username se l'utente è correttamente autenticato
     * L'utente fornisce le credenziali e il nuovo username; il vecchio username viene modificato
     * se le credenziali sono verificate e si riceve una stringa di successo.
     * In caso contrario lo username non viene modificato e si riceve una stringa di fallimento
     * 
     * @param string $oldUsername Lo username attuale che si vuole modificare
     * @param string $password La password dell'utente
     * @param string $newUsername Il nuovo username che si vuole usare
     * @return string
     */
    public function setUsername(string $oldUsername, string $password, string $newUsername)
    {
        if($oldUsername == $this->username && $password == $this->password) {
            $this->username = $newUsername;
            return "Username modificicato";
        }

        return "Username NON modificato";
    }

    /**
     * Restituisce il nome dell'utente
     * @return string 
    */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Restituisce il cognome dell'utente
     * @return string 
    */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Restituisce la mail dell'utente
     * @return string 
    */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Restituisce la password dell'utente
     * Metodo getter solo a scopo dimostrativo dell'esercizio
     * @return string 
    */
    public function getPassword()
    {
        return $this->password;
    }
}

/*
$test1 = new User("Salvo", "AB", "mail@mail.com", "salvoab","psw");
$test2 = new User("Salvo2", "AB2", "mail2@mail.com", "salvoab2","psw2");
// test modifica username riuscita
echo $test2->setUsername("salvoab2", "psw2", "sab3");
echo "\n";
// test modifica username NON riuscita
echo $test2->setUsername("salvoab2", "psw", "sab3");
echo "\n";

var_dump($test1, $test2);
*/