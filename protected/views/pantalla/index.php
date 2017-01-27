<?php
/* @var $this PantallaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pantallas',
);

$this->menu=array(
	array('label'=>'Create Pantalla', 'url'=>array('create')),
	array('label'=>'Manage Pantalla', 'url'=>array('admin')),
);
?>

<h1>Pantallas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
