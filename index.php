<?php
/*
Istruzioni:
Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati.

Bonus (non tanto facoltativo):
Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.
Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi.
*/

include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Admin.php';

$users = [
    new User("Salvo", "Ab", "mail@mail.com", "salvoab","psw"),
    new User("Mario", "Rossi", "mario@mail.com", "marioro","psw1"),
    new User("Giulio", "Verdi", "giulio@mail.com", "giuls","psw2"),
    new User("Franco", "Gialli", "frank@mail.com", "frank","psw3")
];

$admin = new Admin("Alfio", "Alano", "alfio@mail.com", "alfio","psw4", 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio OOP PHP #2</title>
    <style>
        .lista-utenti{
            display: flex;
        }
        .user {
            margin: 40px;
            padding: 20px;
            border-radius: 8px;
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    
    <h1>Elenco utenti</h1>

    <h2>Elenco utenti visualizzatori</h2>
    <div class="lista-utenti">
        <?php foreach($users as $user) { ?>
            <div class="user">
                <h4> <?php echo $user->getName(); ?></h4>
                <h4> <?php echo $user->getLastName(); ?></h4>
                <h4> <?php echo $user->getEmail(); ?></h4>
                <h4> <?php echo $user->getUsername(); ?></h4>
                <h4> <?php echo $user->getPassword(); ?></h4>
            </div>
        <?php } ?>
    </div>

    <h2>Utente amministratore</h2>
    <div class="lista-utenti">
            <div class="user">
            <h4> <?php echo $admin->getName(); ?></h4>
                <h4> <?php echo $admin->getLastName(); ?></h4>
                <h4> <?php echo $admin->getEmail(); ?></h4>
                <h4> <?php echo $admin->getUsername(); ?></h4>
                <h4> <?php echo $admin->getPassword(); ?></h4>
            </div>
    </div>

</body>
</html>