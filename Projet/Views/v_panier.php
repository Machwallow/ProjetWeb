    <div class="main">
        <h1>Votre panier</h1>
        <form action="./index.php?page=panier" method="post">
            <table style="width:100%;">
                <tr>
                    <th></th>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                </tr>
                <?php
                    $i = 0;
                    if(!is_null($productsBasket))
                    foreach($productsBasket as $pb)
                    {?>
                <tr>
                    <td>
                        <img src="<?= PATH_IMAGES.$pb->_prod->_image ?>">
                    </td>
                    <td>
                        <strong><?= $pb->_prod->_name ?></strong>
                        <br>
                        <?= $pb->_prod->_description ?><br>
                    </td>
                    <td>
                        <input type="number" name="qte" id="qte" value="<?= $pb->_qte ?>" readonly />
                    </td>
                    <td >
                        <?= $pb->_totalCost ?>€
                    </td>
                    <td>
                        <input type="hidden" name="idRemoveProd" value="<?= $i ?>" />
                        <input class="btn btn-outline-danger" type="submit" value="Supprimer"/>
                    </td>
                </tr>
                <?php $i++;
                    } ?>
            </table>
        </form>
        <div>
            <a href="<?= './index.php?page=produits' ?>" role="button" class="btn btn-outline-secondary">Retour</a>
            <a href="<?= './index.php?page=payer' ?>" role="button" class="btn btn-outline-primary" style="margin-left: 78.5%;">Payer</a>
        </div>
    </div>