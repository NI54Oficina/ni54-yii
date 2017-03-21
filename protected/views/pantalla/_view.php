<?php
/* @var $this PantallaController */
/* @var $data Pantalla */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pantalla')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pantalla), array('view', 'id'=>$data->id_pantalla)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('id_project')); ?>:</b>
	<?php echo CHtml::encode($data->id_project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modalidad')); ?>:</b>
	<?php echo CHtml::encode($data->modalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />


</div>
