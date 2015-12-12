<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | RacketTennisServices</title>
  <meta name="msapplication-TileColor" content="#5bc0de" />
  <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/pnotify.custom.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">

  <!-- Metis core stylesheet -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="login">
  <div class="form-signin">
    <div class="text-center">
      <img src="assets/img/logo.png" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
      <div id="login" class="tab-pane active">
        <form action="login" method="POST">
          <p class="text-muted text-center">
            Ingresa tu nombre de usuario y tu contraseña
          </p>
          <input type="text" id="txtUser" name="txtUser" placeholder="Nombre de usuario" class="form-control top" required pattern=".{5,50}" title="Minimo 5 caracteres - Maximo 50 caracteres.">
          <input type="password" id="txtPass" name="txtPass" placeholder="Contraseña" class="form-control bottom" required pattern=".{5,50}" title="Minimo 5 caracteres - Maximo 50 caracteres.">
          <button class="btn btn-lg btn-default btn-block" type="submit" id="btnIngreso" name="btnIngreso" style="background: #1EFF62;">Ingresar</button>
        </form>
      </div>
      <div id="forgot" class="tab-pane">
        <form action="login" method="POST" >
          <p class="text-muted text-center">Ingresa tu correo</p>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="corre@email.com" class="form-control">
          <br>
          <button class="btn btn-lg btn-default btn-block" type="submit" id="btnRecuperar" name="btnRecuperar" style="background: #7AB80F;">Recuperar contraseña</button>
        </form>
      </div>
    </div>
    <hr>
    <div class="text-center">
      <ul class="list-inline">
        <li> <a class="text-muted" href="#login" data-toggle="tab">Login</a>  </li>
        <li> <a class="text-muted" href="#forgot" data-toggle="tab">Recuperar contraseña</a>  </li>
      </ul>
    </div>
  </div>

  <!--jQuery -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!--Bootstrap -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/pnotify.custom.min.js"></script>

  <script>
    (function($) {
      $(document).ready(function() {
        $('.list-inline li > a').click(function() {
          var activeForm = $(this).attr('href') + ' > form';
            //console.log(activeForm);
            $(activeForm).addClass('animated fadeIn');
            //set timer to 1 seconds, after that, unload the animate animation
            setTimeout(function() {
              $(activeForm).removeClass('animated fadeIn');
            }, 1000);
          });
      });
    })(jQuery);
  </script>

  <?php if(!$this->session->userdata('ingreso')){ ?>
  <script type="text/javascript">
    PNotify.desktop.permission();
    (new PNotify({
      title: 'Bienvenido usuario',
      text: 'Hola, te damos la bienvenida al gestor de clubes y escuelas de tenis de campo RacketTennisServices! \nIngresa en el sistema para continuar.',
      desktop: {
        desktop: true
      }
    }));
  </script>
  <?php $this->session->set_userdata('ingreso',rand(2,50)); } ?>

  <?php if($this->session->userdata('error')){ ?>
  <script type="text/javascript">
    PNotify.desktop.permission();
    (new PNotify({
      title: 'Ops...!',
      text: 'Los datos que has ingresado no son correctos, intenta nuevamente o recupera tu contraseña.',
      type: 'error',
      desktop: {
        desktop: true
      }
    }));
  </script>
  <?php $this->session->unset_userdata('error'); } ?>

  <?php if($this->session->userdata('correo')){ ?>
  <script type="text/javascript">
    PNotify.desktop.permission();
    (new PNotify({
      title: 'Todo ha salido bien!',
      text: 'Si el correo que ingresaste coincide con alguno registrado en nuestra base de datos, puedes revisar tu correo para reiniciar tu contraseña.',
      type: 'success',
      desktop: {
        desktop: true
      }
    }));
  </script>
  <?php $this->session->unset_userdata('error'); } ?>

</body>
</html>