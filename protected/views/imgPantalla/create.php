<?php
/* @var $this ImgPantallaController */
/* @var $model ImgPantalla */

$this->breadcrumbs=array(
	'Img Pantallas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ImgPantalla', 'url'=>array('index')),
	array('label'=>'Manage ImgPantalla', 'url'=>array('admin')),
);
?>

<h1>Create ImgPantalla</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
