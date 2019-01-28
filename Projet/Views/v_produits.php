    <div class="main">
        <h2><?= strtoupper($nom) ?></h2>
        <table>
            <?php foreach($produits as $prod) { ?>
                <tr>
                    <td><img src="<?= PATH_IMAGES.$prod->_image ?>"></td>
                    <td>
                        <strong><?= $prod->_name?></strong><br>
                        <?= $prod->_description?><br>
                        <strong>Notre prix : <?= $prod->_price ?>€</strong><br><br>
                        <a role="button" class="btn btn-outline-primary" href="./index.php?page=addProduct&idP=<?= $prod->_id ?>">Ajouter au panier</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div>
            <a href="./index.php?page=accueil" id="retour" role="button" class="btn btn-outline-secondary">Retour</a>
        </div>
    </div>
