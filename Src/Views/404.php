<?php

use App\Core\Router\Router;
global $router;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;URL=<?=$router->url('home');?>">
    <title>Erreur 404</title>
</head>
<body id="page404">
    <h1>ERREUR 404</h1>
    <p>Cette page n'est pas accessible vous serez redirigé vers l'accueil dans 5 secondes...</p>
</body>
</html>