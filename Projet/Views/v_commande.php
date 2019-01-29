<div class="main">
    <h1>Les commandes</h1>
    <form action="./index.php?page=commande" method="post">
        <table style="width:100%;">
            <tr style="text-align: center;">
                <th>Id Customer</th>
                <th>Registered</th>
                <th>Id Add Livraison</th>
                <th>Paid with</th>
                <th>Date</th>
                <th>Status</th>
                <th>Total</th>
            </tr>
            <?php
            $i = 1;
                foreach($orders as $order)
                {
                    if($order->_status == 10)
                        echo '<tr style="background-color:#4caf50b5; text-align: center;">';
                    else
                        echo '<tr style="text-align: center;">';
                    ?>
                        <td>
                            <?= $order->_custId ?>
                        </td>
                        <td >
                            <?= $order->_registered ?>
                        </td>
                        <td >
                            <?= $order->_dAddressId ?>
                        </td>
                        <td >
                            <?= $order->_paymentType ?>
                        </td>
                        <td >
                            <?= $order->_date ?>
                        </td>
                        <td >
                            <?= $order->_status ?>
                        </td>
                        <td >
                            <?= $order->_total ?>€
                        </td>
                        <td>
                            <input type="hidden" name="idChangeOrder" value="<?= $i ?>" />
                            <input class="btn btn-outline-dark" type="submit" value="Confirmer"/>
                        </td>
                    </tr>
                    <?php $i++;
                } ?>
        </table>
    </form>
    <div>
        <br>
        <a href="<?= './index.php?page=accueil' ?>" role="button" class="btn btn-outline-secondary">Retour</a>
    </div>
</div>