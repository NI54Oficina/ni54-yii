<?php
/* @var $this ImgPantallaController */
/* @var $model ImgPantalla */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'img-pantalla-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">


		<?php echo $form->labelEx($model,'id_pantalla'); ?>

		<!-- <?php echo $form->textField($model,'id_pantalla'); ?> -->




		<input id="ImgPantalla_id_pantalla" type="text" name="ImgPantalla[id_pantalla]" value="<?php echo $model->id_pantalla ?>" disabled="">





		<?php echo $form->error($model,'id_pantalla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img'); ?>
		<?php echo $form->textField($model,'img'); ?>
		<?php echo $form->error($model,'img'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
