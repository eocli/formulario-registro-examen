<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Formularios de registro usando control de versiones">
  <meta name="keywords" content="Control de versiones + desarrollo web">
  <meta name="author" content="Dr. Ángel Vásquez">

  <link rel="stylesheet" href="css/monserrat.css" type="text/css">
  <link rel="stylesheet" href="css/estilo.css" type="text/css">
  <link rel="stylesheet" href="css/reset.css" type="text/css">

</head>
<body>

  <!-- formulario múltiple-->
<form id="msform">

  <!-- barra de progreso -->
  <ul id="progressbar">
    <li class="active">Activación de cuenta</li>
    <li>Perfiles de Redes Sociales</li>
    <li>Detalles personales</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Crea tu cuenta</h2>
    <h3 class="fs-subtitle">Paso 1 de 3</h3>
    <input type="text" name="v_email" placeholder="Correo electrónico" />
    <input type="password" name="v_pass" placeholder="Contraseña" />
    <input type="password" name="v_cpass" placeholder="Confirma tu contraseña" />
    <input type="button" name="next" class="next action-button" value="Siguiente" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Perfil de redes sociales</h2>
    <h3 class="fs-subtitle">Estaremos más cerca de tí</h3>
    <input type="text" name="v_twitter" placeholder="Twitter" />
    <input type="text" name="v_facebook" placeholder="Facebook" />
    <input type="text" name="v_gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Anterior" />
    <input type="button" name="next" class="next action-button" value="Siguiente" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Detalles personales</h2>
    <h3 class="fs-subtitle">La información proporcionada es segura</h3>
    <input type="text" name="v_nombres" placeholder="Nombre (s)" />
    <input type="text" name="v_apellidos" placeholder="Apellidos" />
    <input type="text" name="v_telf" placeholder="Celular" />
    <textarea name="v_direccion" placeholder="Dirección completa"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Anterior" />
    <input type="submit" name="submit" class="submit action-button" value="Registrar" />
  </fieldset>

</form>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jqueryeasing.min.js"></script>
<script src="js/dinamico.js"></script>
</body>
</html>
