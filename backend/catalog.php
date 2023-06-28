<?php require_once 'includes/connection.php' ?>
<?php require_once 'includes/init.view.php' ?>
  
  <body>

<?php require_once 'includes/header.view.php' ?>
<?php
  if (isset($_GET['idc'])) {
    $idc = $_GET['idc'];
    $cat = $_GET['cat'];
    
    $sql = "select * from producto where idcategoria = $idc";
    
  } else {
    $sql = "select * from producto where oferta = 5";
    $cat = "Productos en oferta";
  }
  $rs = mysqli_query($cn, $sql);
?>
  
  <main class="wx-container mtb-50">
    <h1 class="custom-title-1">
      <?= $cat ?>
      <span class="line"></span>
    </h1>
    <div class="main-filter col-25 f-left">
      <h2>Ordenar por</h2>
      <form action="">
        <div class="by-price">
          <h3>Precio</h3>
          <label>
            <input type="range">
          </label>
        </div>
        <div class="by-color">
          <h3>Color</h3>
          <label>
            <input type="checkbox">Rojo
          </label>
          <label>
            <input type="checkbox">Blanco
          </label>
          <label>
            <input type="checkbox">Negro
          </label>
        </div>
        <div class="by-brand">
          <h3>Marca</h3>
          <label>
            <input type="checkbox">Samsung
          </label>
          <label>
            <input type="checkbox">Sony
          </label>
          <label>
            <input type="checkbox">Apple
          </label>
          <label>
            <input type="checkbox">Huawei
          </label>
        </div>
      </form>
    </div>
    <div class="products col-75 f-right">
      <div class="container--grid">
        <?php while ($f = mysqli_fetch_array($rs)) : ?>
          <div class="wrapper--card">
            <div class="card__image">
              <a href="product.php?idp=<?= $f[0] ?>">
                <img class="block--image" src="dist/img/phone/<?= $f[0] ?>.png" alt="">
              </a>
            </div>
            <div class="card__data">
              <h3><span class="brand"><?= $f[6] ?></span></h3>
              <h3><span class="model"><?= $f[1] ?></span></h3>
            </div>
            <div class="card__price">
              <a class="button--null" href="#">
                <span>Ver más</span><span><?= $f[3] ?></span>
              </a>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </main>

<?php require_once 'includes/footer.view.php'?>