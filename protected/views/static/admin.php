<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- BOOTSTRAP CSS -->
    <link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <div class="col-xs-12 button">
          <p>INGRESAR PROYECTOS</p>
        </div>
      </a>

      <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/pantalla/create" target="_blank">
        <div class=" col-xs-12 button">
          <p>INGRESAR PANTALLAS POR PROYECTOS</p>
        </div>
      </a>

      <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/1" target="_blank">
        <div class="col-xs-12 button">
          <p>INGRESAR IMAGENES POR PANTALLA</p>
        </div>
      </a>

      <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/clientes/create" target="_blank">
        <div class="col-xs-12 button">
          <p>INGRESAR CLIENTES</p>
        </div>
      </a>

      <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/partners/create" target="_blank">
        <div class="col-xs-12 button">
          <p>INGRESAR PARTNERS</p>
        </div>
      </a>


      <p><span>Aclaraciones</span><br>

        <b>1)</b> En <b>"INGRESAR PROYECTOS"</b> se generan nuevos proyectos, donde se deben completar los campos y subir una imagen, que es la que aparecerá en el slider del inicio <br>
        <b>2)</b> En <b>"INGRESAR PANTALLA POR PROYECTOS"</b> se ingresan las distintas pantallas que tendra el projecto en la parte interna.<br>
           Hay dos tipso de pantalla,<br>
           <b>    a)</b> En la cual solo hay una imagen centrada y en el costado izquierdo informacion sobre Modalidad y Tipo de trabajo. (WEB, APP, etc).<br>
              En este caso se selecciona el proyecto, se completa la modalidad, Trabajo, color y arrastrar una imagen.<br>
           <b>    b)</b> En la cual solo hay imagenes y no hay texto. <br>
              En este caso solo se selecciona el proyecto y se ingresa el color.<br>
        <b>3)</b> En <b>"INGRESAR IMAGENES POR PANTALLA"</b> se agregan imagenes para cada una de las pantallas generadas en el punto 2)b).


      </p>


  </body>
</html>
