<?php include 'includes/connection.php' ?>
<?php
  $sql1="select * from categoria";
  $cat =mysqli_query($cn, $sql1);
?>
<?php require_once 'includes/init.view.php' ?>
  
  <body>

<?php require_once 'includes/header.view.php' ?>
<?php require_once 'includes/main-slider.view.php' ?>
  
  <main class="wx-container">
    <?php while ($f= mysqli_fetch_array($cat)) : ?>
      <section class="gamma high">
        <div class="gamma__data">
          <h2>Smartphones de <?= $f[1] ?> <span class="price">(0-50$)</span></h2>
          <a href="catalog.php?idc=<?= $idc = $f[0] ?>&cat=<?= $f[1] ?>" class="category">VER TODO</a>
        </div>
        <div class="owl-products owl-carousel owl-theme">
          <?php
            $sql2 = "select * from producto where idcategoria = $idc";
            $prod = mysqli_query($cn, $sql2);
          ?>
          <?php while ($r = mysqli_fetch_array($prod)) : ?>
            <div class="item">
              <div class="wrapper--card">
                <div class="card__image">
                  <a href="product.php?idp=<?= $r[0] ?>">
                    <img class="block--image" src="dist/img/phone/<?= $r[0] ?>.png" alt="">
                  </a>
                </div>
                <div class="card__data">
                  <h3><span class="brand"><?= $r[6] ?></span></h3>
                  <h3><span class="model"><?= $r[1] ?></span></h3>
                </div>
                <div class="card__price">
                  <a class="button--null" href="product.php?idp=<?= $r[0] ?>">
                    <span>Ver más</span><span><?= $r[3] ?></span>
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </section>
    <?php endwhile; ?>
  </main>

<?php require_once 'includes/footer.view.php'?>