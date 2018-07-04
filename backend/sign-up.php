<?php include 'includes/connection.php' ?>
<?php require_once 'includes/init.view.php' ?>

<body class="no-margin">
  
  <div class="solo-content">
    <main>
      <section class="nd-container nd-item col-active">
        <!--<p class="paragraph to-center">¿Ya estás registrado? Inicia sesión <a href="sign-in.html">aquí</a></p>-->
        <form class="main-form">
          <input name="name" type="text" class="feedback-input" placeholder="Nombre" required />
          <input name="name" type="text" class="feedback-input" placeholder="Nombre de usuario" required />
          <input name="email" type="text" class="feedback-input" placeholder="Correo" required />
          <input name="email" type="password" class="feedback-input" placeholder="Contraseña" required />
          <input name="email" type="password" class="feedback-input" placeholder="Repetir contraseña" required />
          <div class="dual-button">
            <input class="button--null formy selfish" type="submit" value="Registrarse"/>
            <!--<input class="button big selfish" type="submit" value="Cancelar"/>-->
            <a class="button--null formy selfish" href="index.php">Cancelar</a>
          </div>
        </form>
      </section>
    </main>
  </div>
  <script src="dist/js/jquery-3.3.1.js"></script>
  <script src="dist/js/jquery.nicescroll.min.js"></script>
  <script src="dist/js/config-nscroll.js"></script>
</body>
</html>