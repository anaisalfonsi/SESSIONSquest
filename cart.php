<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>

<?php
//session_start() dans le head;
if(empty($_SESSION['login'])) {
    header('Location: http://localhost:8000/login.php');
    exit();
}
if(isset($_SESSION['login'])) {
    echo "Logined ^^";
}
?>
<?php $quantities = array_count_values($_SESSION['cart']); ?>
<section class="cookies container-fluid cookieCont">
    <table class="tableCart">
        <thead>
        <tr>
            <th>Id</th>
            <th>Produit</th>
            <th>Prix unitaire</th>
            <th>Quantité</th>
            <th>Prix total</th>
        </tr>
        </thead>
        <tbody>
        <?php $totalPrice = 0; ?>
        <?php foreach($quantities as $productId => $quantities) {?>
        <tr>
            <td><?= $productId; ?></td>
            <td><?= $catalog[$productId]['name']; ?></td>
            <td><?= $catalog[$productId]['price']; ?></td>
            <td><?= $quantities; ?></td>
            <td><?= $rowTotalPrice = $quantities * $catalog[$productId]['price']; ?></td>
        </tr>
            <?php $totalPrice += $rowTotalPrice; ?>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    Total :
                </td>
                <td>
                    <?= $totalPrice; ?>
                </td>
            </tr>
        </tfoot>
    </table>
</section>
<?php require 'inc/foot.php'; ?>
