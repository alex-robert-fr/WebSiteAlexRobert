<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Admin</title>
    <link rel="stylesheet" href="<?=str_replace($_GET['url'], '', $_SERVER['REQUEST_URI'])?>/src/Views/css/admin.css">
    <link rel="stylesheet" href="<?=str_replace($_GET['url'], '', $_SERVER['REQUEST_URI'])?>/src/Views/css/admin-ui-elements.css">
</head>

<body id="login">
    <section class="panel">
        <h2>Connexion</h2>
        <form class="fields" action="" method="post">
            <input type="email" name="email" id="emailConnexion" placeholder="Email">
            <?php if(isset($errorEmail)){
                echo '<p class="error">' .$errorEmail. '</p>';
            }?>

            <input type="password" name="password" id="passwordConnexion" placeholder="Mot de passe">
            <?php if(isset($errorPassword)){
                echo '<p class="error">' .$errorPassword. '</p>';
            }
            if(isset($errorLogin)){
                echo '<p class="error">' .$errorLogin. '</p>';
            }
            
            ?>

            <button class="btn btn-primary" type="submit" name="login">Se connecter</button>
        </form>
    </section>
</body>

</html>