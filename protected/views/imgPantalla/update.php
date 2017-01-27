<?php
/* @var $this ImgPantallaController */
/* @var $model ImgPantalla */

$this->breadcrumbs=array(
	'Img Pantallas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ImgPantalla', 'url'=>array('index')),
	array('label'=>'Create ImgPantalla', 'url'=>array('create')),
	array('label'=>'View ImgPantalla', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ImgPantalla', 'url'=>array('admin')),
);
?>

<h1>Update ImgPantalla <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>