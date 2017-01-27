<?php
/* @var $this PantallaController */
/* @var $model Pantalla */

$this->breadcrumbs=array(
	'Pantallas'=>array('index'),
	$model->id_pantalla,
);

$this->menu=array(
	array('label'=>'List Pantalla', 'url'=>array('index')),
	array('label'=>'Create Pantalla', 'url'=>array('create')),
	array('label'=>'Update Pantalla', 'url'=>array('update', 'id'=>$model->id_pantalla)),
	array('label'=>'Delete Pantalla', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pantalla),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pantalla', 'url'=>array('admin')),
);
?>

<h1>View Pantalla #<?php echo $model->id_pantalla; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pantalla',
		'id_project',
		'modalidad',
		'img',
		'trabajo',
		'color',
	),
)); ?>
