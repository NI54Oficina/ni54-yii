<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADMINISTRADOR</title>
  </head>

  <style media="screen">

    body{
      padding:100px;
      background-color: #dedcdc;
    }
    .button{
      padding: 20px;
      display:inline-flex;

    }

    .button p{
      color: white;
      background: linear-gradient( #39b4e0, #2ea2cb);
      padding: 30px;
      border: 1px solid #39b4e0;
      border-radius: 5px;
      font-family: verdana;
    }

    .button p:hover{
      opacity: .5;
    }

    a{
      outline: none;
      text-transform: none;
      text-decoration: none;
    }

  </style>
  <body>

      <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/project/create" target="_blank">
        <div class="button">
          <p>INGRESAR PROYECTOS</p>
        </div>
      </a>

      <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/pantalla/create" target="_blank">
        <div class="button">
          <p>INGRESAR SOLAPAS POR PROYECTOS</p>
        </div>
      </a>

      <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/1" target="_blank">
        <div class="button">
          <p>INGRESAR IMAGENES POR SOLAPAS</p>
        </div>
      </a>

      <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/clientes/create" target="_blank">
        <div class="button">
          <p>INGRESAR CLIENTES</p>
        </div>
      </a>

      <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/partners/create" target="_blank">
        <div class="button">
          <p>INGRESAR PARTNERS</p>
        </div>
      </a>


      <p><span>Aclaraciones</span><br>

      </p>


  </body>
</html>
