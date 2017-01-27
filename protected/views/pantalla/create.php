<?php
/* @var $this PantallaController */
/* @var $model Pantalla */

$this->breadcrumbs=array(
	'Pantallas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pantalla', 'url'=>array('index')),
	array('label'=>'Manage Pantalla', 'url'=>array('admin')),
);
?>

<h1>Create Pantalla</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>