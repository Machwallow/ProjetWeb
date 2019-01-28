    <div class="main">
		<h1>Ajouter au panier</h1>
		<form action="./index.php?page=addProduct&idP=<?= $_GET["idP"] ?>" method="post">
            <table>
                <tr>
                    <th></th>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                </tr>
                <tr>
                    <td style="width:25%;">
                        <img src="<?= PATH_IMAGES.$prod->_image ?>">
                    </td>
                    <td style="width:30%;">
                        <input type="hidden" name="name" value="<?= $prod->_name?>">
                        <strong><?= $prod->_name ?></strong><br>
                        <input type="hidden" name="price" value="<?= $prod->_price?>">
                        <?= $prod->_description ?><br>
                    </td>
                    <td style="width:15%;">
                        <input type="number" name="qte" id="qte" min="1" value="1" required />
                    </td>
                    <td style="width:15%;">
                        <input type="hidden" name="price" value="<?= $prod->_price?>">
                        <?= $prod->_price ?>€
                    </td>
                    <td>
                        <input class="btn btn-outline-success" type="submit" value="Ajouter"/>
                    </td>
                </tr>
            </table>
        </form>
        <div>
            <a href="<?= './index.php?page=produits' ?>" role="button" class="btn btn-outline-secondary">Retour</a>
        </div>
    </div>