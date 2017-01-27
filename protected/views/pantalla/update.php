<?php
/* @var $this PantallaController */
/* @var $model Pantalla */

$this->breadcrumbs=array(
	'Pantallas'=>array('index'),
	$model->id_pantalla=>array('view','id'=>$model->id_pantalla),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pantalla', 'url'=>array('index')),
	array('label'=>'Create Pantalla', 'url'=>array('create')),
	array('label'=>'View Pantalla', 'url'=>array('view', 'id'=>$model->id_pantalla)),
	array('label'=>'Manage Pantalla', 'url'=>array('admin')),
);
?>

<h1>Update Pantalla <?php echo $model->id_pantalla; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>