<div class="main">
    <h2>Informations livraison & paiement</h2>
    <p>
        Veuillez remplir les champs du formulaire ci-dessous pour valider votre commande.
    </p>
    <form action="./index.php?page=inscription" method="post">
        <ul>
            <li>
                <label for="idfn">Prénom : </label>
                <input type="text" name="forname" value="<?= $_SESSION['forname'] ?>" id="idfn" required />
            </li>
            <br>
            <li>
                <label for="idsn">Nom : </label>
                <input type="text" name="surname" value="<?= $_SESSION['surname'] ?>" id="idsn" required />
            </li>
            <br>
            <li>
                <label for="ida1">Adresse 1 : </label>
                <input type="text" name="add1" value="<?= $_SESSION['add1'] ?>" id="ida1" required />
            </li>
            <br>
            <li>
                <label for="ida2">Adresse 2 : </label>
                <input type="text" name="add2" value="<?= $_SESSION['add2'] ?>" id="ida2" required />
            </li>
            <br>
            <li>
                <label for="idpc">Code postal : </label>
                <input type="number" name="postcode" id="idpc" value="<?= $_SESSION['postcode'] ?>" minlength="5" maxlength="5" required />
            </li>
            <br>
            <li>
                <label for="idpn">Numéro de téléphone : </label>
                <input type="tel" name="phone" id="idpn" value="<?= $_SESSION['phone'] ?>" minlength="10" maxlength="10" required />
            </li>
            <br>
            <li>
                <label for="idem">Adresse e-mail : </label>
                <input type="email" name="email" value="<?= $_SESSION['email'] ?>" id="idem" required />
            </li>
            <br>
            <li>
                <label for="idtc">Prix de la commande : </label>
                <input type="number" name="totalCost" value="<?= $prixTotal ?>" id="idem" style="width: 80px;" readonly /> €
            </li>
            <br>
            <li>
                <label for="cd">Moyen de paiement </label>
                <select name="creditCard" id="cd" class="form-control" style="width: fit-content">
                    <option selected="selected">MasterCard</option>
                    <option selected="selected">VISA</option>
                </select>
                <span class="fas fa-credit-card"></span>
            </li>
        </ul>
        <a href="./index.php?page=panier" role="button" class="btn btn-outline-secondary">Retour</a>
        <input class="btn btn-success" type="submit" value="Payer"/>
    </form>
</div>