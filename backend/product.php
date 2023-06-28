<?php require_once 'includes/connection.php' ?>
<?php
  $idp = $_GET['idp'];
  
  $sql = "select * from producto where idproducto = $idp";
  $rs = mysqli_query($cn, $sql);
?>
<?php require_once 'includes/init.view.php' ?>
  
  <body>

<?php require_once 'includes/header.view.php' ?>
  
  <main class="wx-container mtb-50">
    <?php while ($f = mysqli_fetch_array($rs)) : ?>
      <p>Inicio / <?= $f[1] ?></p>
      <div class="p-detail-filter col-55 f-right">
        <div class="card__data">
          <h3><span class="brand"><?= $f[6] ?></span></h3>
          <h3><span class="model"><?= $f[1] ?></span></h3>
        </div>
        <hr>
        <form action="add_to_cart.php">
          <input type="hidden" name="idp" value="<?= $f[0] ?>">
          <input type="hidden" name="nombre" value="<?= $f[1] ?>">
          <input type="hidden" name="precio" value="<?= $f[3] ?>">
          <div class="dt-price">
            <h3>Precio</h3>
            <p><?= $f[3] ?>$</p>
          </div>
          <div class="dt-color">
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
          <div class="dt-color">
            <h3>Cantidad</h3>
            <label>
              <input name="cantidad" value="1">
            </label>
          </div>
          <div class="dt-btn">
            <input class="button--null formy" type="submit" value="Agregar al carro">
<!--            <a href="cart.php" class="button--null formy">Comprar</a>-->
          </div>
          <div class="dt-description">
            <h3>Descripción</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, in, perferendis? Aliquam, assumenda cupiditate debitis dolorum enim hic id minus nihil, optio quaerat, quo sapiente tempore ut velit voluptatem voluptatum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis fuga fugit ipsa ipsam natus vero! Ab aspernatur cumque debitis dicta, dolorem, esse eveniet facere hic libero nobis praesentium quas soluta!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, in, perferendis? Aliquam, assumenda cupiditate debitis dolorum enim hic id minus nihil, optio quaerat, quo sapiente tempore ut velit voluptatem voluptatum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis fuga fugit ipsa ipsam natus vero! Ab aspernatur cumque debitis dicta, dolorem, esse eveniet facere hic libero nobis praesentium quas soluta!</p>
          </div>
        </form>
      </div>
      <div class="p-detail col-45 f-left">
        <div class="container">
          <div class="wrapper--c-detail">
            <div class="card__image">
              <div class="product__img">
                <img id="img_01" src="dist/img/phone/<?= $f[0] ?>.png" data-zoom-image="dist/img/demo/large/image1.jpg"/>
              </div>
              <div id="gal1">
                <a href="#" data-image="dist/img/phone/1.png" data-zoom-image="dist/img/demo/large/image1.jpg">
                  <img src="dist/img/demo/thumb/image1.jpg" />
                </a>
                <a href="#" data-image="dist/img/phone/2.png" data-zoom-image="dist/img/demo/large/image2.jpg">
                  <img src="dist/img/demo/thumb/image2.jpg" />
                </a>
                <a href="#" data-image="dist/img/phone/3.png" data-zoom-image="dist/img/demo/large/image3.jpg">
                  <img src="dist/img/demo/thumb/image3.jpg" />
                </a>
                <a href="#" data-image="dist/img/phone/4.png" data-zoom-image="dist/img/demo/large/image4.jpg">
                  <img src="dist/img/demo/thumb/image4.jpg" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </main>

<?php require_once 'includes/footer.view.php'?>