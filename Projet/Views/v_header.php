<!DOCTYPE html>
<html>
<head>
    <title><?= TITRE ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Language" content="<?= LANG ?>"/>
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0"/>

    <link href="<?= PATH_CSS.'/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?= PATH_CSS.'style.css' ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="<?= PATH_JS.'bootsrap.bundle.js' ?>"></script>
    <script src="<?= PATH_JS.'bootsrap.js' ?>"></script>
</head>
<body>
<!-- En-tête -->
<header>
    <h1 id="titre">I S I W E B 4 S H O P</h1>
    <h2 id="ss-titre">
        <a href="./index.php?page=accueil" class="liens">Accueil</a>
        -
        <a href="./index.php?page=panier" class="liens">Voir panier <?php if (isset($_SESSION['basket'])) echo '('.count($_SESSION['basket']).')'; else echo '(0)'; ?></a>
    </h2>
    <nav>
        <h3>Notre offre :</h3>
        <ul>
            <?php foreach($categories as $cat) {
                echo '<li>';
                    echo'<a class="liens" href="./index.php?page=produits&cat='.$cat->_id.'&name='.$cat->_name.'">'.$cat->_name.'</a>';
                echo '</li>';
            } ?>
            <li>
                <a class="liens" href="./index.php?page=produits">Tous</a>
            </li>
        </ul>
        <!-- version JS
        <button onclick="location.href='controller de connexion" type="button">Se connecter</button>
        !-->
        <a class="btn btn-outline-secondary" role="button" <?php
        if(isset($_SESSION["id"]) || (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]))
            echo 'href="./index.php?page=deconnexion">Se déconnecter</a>';
        else
            echo 'href="./index.php?page=connexion">Se connecter</a>'?>
    </nav>
</header>

<!-- Vue -->
