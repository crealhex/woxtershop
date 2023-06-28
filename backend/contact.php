<?php include 'includes/connection.php' ?>
<?php require_once 'includes/init.view.php' ?>

<body>
  
  <?php require_once 'includes/header.view.php' ?>
  
  <main class="mtb-50 pure">
    <section class="nd-container nd-item particle-block">
      <form class="main-form">
        <input name="name" type="text" class="feedback-input" placeholder="Nombre" required/>
        <input name="email" type="email" class="feedback-input" placeholder="Correo" required/>
        <input name="email" type="text" class="feedback-input" placeholder="Asunto" required/>
        <textarea name="text" class="feedback-input" placeholder="Mensaje" required></textarea>
        <input class="button--null formy selfish" type="submit" value="ENVIAR"/>
      </form>
    </section>
  </main>
  <div class="wrapper-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2746.3330246344344!2d-77.08163894043051!3d-11.948119131507998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDU2JzUxLjEiUyA3N8KwMDQnNTAuNSJX!5e0!3m2!1sen!2spe!4v1530139080189" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

<?php require_once 'includes/footer.view.php'?>