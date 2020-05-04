<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>

<?php
//session_start() dans le head;
if(empty($_SESSION['login'])) {
    header('Location: http://localhost:8000/login.php');
    exit();
}

if(isset($_SESSION['login'])) {
    echo "Logined ^^ ";
}
?>
<?php
echo '<pre>';
var_dump($_GET);
if(isset($_GET['add_to_cart'])) {
    $_SESSION['cart'][] = $_GET['add_to_cart'];
}
   /* if(!isset($_SESSION['cart'][$_GET['add_to_cart']])) {
        $_SESSION['cart'][$_GET['add_to_cart']] = 0;
    }
    $_SESSION['cart'][$_GET['add_to_cart']] += $_SESSION['qtt'];*/
var_dump($_SESSION);
echo '</pre>';
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <p><?= $cookie['price']; ?> $</p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
