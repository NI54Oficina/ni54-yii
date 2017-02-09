<?php
/* @var $this PartnersController */
/* @var $model Partners */

$this->breadcrumbs=array(
	'Partners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Partners', 'url'=>array('index')),
	array('label'=>'Manage Partners', 'url'=>array('admin')),
);
?>

<h1>Create Partners</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>