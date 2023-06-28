<?php require_once 'includes/connection.php' ?>
<?php
  session_start();
  
  if (!isset($_SESSION['carrito'])) {
    header('Location: catalog.php');
  }
  
  $importe = 0;
  $total = 0;
?>
<?php require_once 'includes/init.view.php' ?>
  
  <body>

<?php require_once 'includes/header.view.php' ?>
  
  <div class="wrap cf">
    <h1 class="projTitle">Carrito de compras</h1>
    <div class="heading cf">
      <h1>Mi carrito</h1>
      <a href="catalog.php" class="continue">Seguir comprando</a>
    </div>
    <div class="cart">
      <ul class="cartWrap">
        <?php foreach ($_SESSION['carrito'] as $key => $value) : ?>
          <?php
          $importe = $value[2] * $value[3];
          $total += $importe;
          ?>
          <li class="items odd">
            <div class="infoWrap">
              <div class="cartSection">
                <img src="dist/img/phone/<?= $value[0] ?>.png" alt="" class="itemImg" />
                <p class="itemNumber">#QUE-007544-002</p>
                <h3><?= $value[1] ?></h3>
                <form action="edit_item.php" method="get">
                  <input type="hidden" value="<?= $value[0] ?>" name="cod">
                  <p><input name="can"  class="qty" value="<?= $value[2] ?>" placeholder="1"/> x $<?= $value[3] ?></p>
                  <p class="stockStatus">En stock</p>
                </form>
              </div>
              <div class="prodTotal cartSection">
                <p>$<?= $importe ?></p>
              </div>
              <div class="cartSection removeWrap">
                <a class="remove" href="remove_item.php?cod=<?= $value[0] ?>">
                  <i class="fas fa-times-circle"></i>
                </a>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="subtotal cf">
      <ul>
        <li class="totalRow"><span class="label">Subtotal</span><span class="value">$<?= $total ?></span></li>
        <li class="totalRow"><span class="label">Envío</span><span class="value">$10.00</span></li>
        <li class="totalRow final"><span class="label">Total</span><span class="value">$<?= ($total + 10) ?></span></li>
        <li class="totalRow"><a href="#" class="btn continue">Checkout</a></li>
      </ul>
    </div>
  </div>

<?php require_once 'includes/footer.view.php'?>