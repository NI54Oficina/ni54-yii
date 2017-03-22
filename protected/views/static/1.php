<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADMINISTRADOR</title>
  </head>
<style >
    body{
      padding:100px;
      background-color: #dedcdc;
    }

    p{
      font-family: verdana;
      border-top: 1px solid black;
      padding-top: 20px;

    }

    button{
      background: linear-gradient( #39b4e0, #2ea2cb);
      padding: 1  0px;
      border: 1px solid #39b4e0;
      border-radius: 5px;
      font-family: verdana;
      color:white;
      margin-bottom: 20px;
    }

    button:hover{
      opacity: .5;
      cursor: pointer;
    }
</style>


  <body>



    <?php
    // $data="1";
    $Criteria = new CDbCriteria();
            // $Criteria->condition = "id_project = '".$data."'";
    $project= Project::model()->findAll($Criteria);


    foreach($project as $p){
    ?>

    <p id="<?php echo $p["id_project"]; ?>"><?php  echo $p["nombre"]; ?></p>
    <?php

        $pantalla= Pantalla::model()->findAllByAttributes(array("id_project"=>$p->id_project));
        foreach($pantalla as $pan){


     ?>
      <form class="" action="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/imgPantalla/create" method="post">
        <input type="hidden" name="pantalla" value="<?php echo $pan["id_pantalla"]; ?>">

        <button type="submit"  name=""><?php echo $pan["id_pantalla"]; ?></button>

      </form>

    <?php }} ?>

  </body>
</html>
