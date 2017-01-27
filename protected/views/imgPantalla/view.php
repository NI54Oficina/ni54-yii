<?php
/* @var $this ImgPantallaController */
/* @var $model ImgPantalla */

$this->breadcrumbs=array(
	'Img Pantallas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ImgPantalla', 'url'=>array('index')),
	array('label'=>'Create ImgPantalla', 'url'=>array('create')),
	array('label'=>'Update ImgPantalla', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ImgPantalla', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ImgPantalla', 'url'=>array('admin')),
);
?>

<h1>View ImgPantalla #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_pantalla',
		'img',
	),
)); ?>
