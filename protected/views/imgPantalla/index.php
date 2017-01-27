<?php
/* @var $this ImgPantallaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Img Pantallas',
);

$this->menu=array(
	array('label'=>'Create ImgPantalla', 'url'=>array('create')),
	array('label'=>'Manage ImgPantalla', 'url'=>array('admin')),
);
?>

<h1>Img Pantallas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
