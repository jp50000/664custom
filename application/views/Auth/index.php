<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom 664</title>
    <link rel="icon" href="<?php echo base_url(); ?>resources/images/cargrey.ico" type="image/icon" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.5/css/uikit.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/main.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.5/js/uikit.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.5/js/uikit-icons.min.js"></script>
  </head>
  <body class="login uk-cover-container uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-overflow-hidden uk-light" data-uk-height-viewport >
    <div class="uk-position-cover uk-overlay-primary"></div>
    <div class="uk-position-bottom-center uk-position-small uk-visible@m uk-position-z-index">
      <span class="uk-text-muted uk-text-small">Copyright ® www.664custom.com</span>
    </div>
    <div class="uk-width-medium uk-padding-small uk-position-z-index" uk-scrollspy="cls:uk-animation-fade">
      <div class="uk-text-center uk-margin">
        <img src="<?php echo base_url(); ?>resources/images/logox.png" alt="">
      </div>

      <form class="togle-class" action="<?php echo base_url(); ?>Auth/login" method="post">
        <fieldset class="uk-fieldset">
          <div class="uk-margin-small">
            <div class="uk-inline uk-width-1-1">
              <span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: user"></span>
              <input class="uk-input uk-border-pill" required placeholder="Correo Electrónico" name="username" type="text" value="">
            </div>
          </div>
          <div class="uk-margin-small">
            <div class="uk-inline uk-width-1-1">
              <span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: lock"></span>
              <input type="password" class="uk-input uk-border-pill" required placeholder="Contraseña" name="password" value="">
            </div>
          </div>
          <div class="uk-margin-small">
						<label><input class="uk-checkbox" type="checkbox"> Guardar Contraseña</label>
					</div>
          <div class="uk-margin-bottom">
            <button type="submit" class="uk-button-primary uk-button uk-border-pill uk-width-1-1" name="button">Iniciar Sesión</button>
          </div>
        </fieldset>
      </form>
    </div>

  </body>
</html>
