<?php
/* @var $this PantallaController */
/* @var $model Pantalla */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pantalla-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_project'); ?>
		<!-- <?php echo $form->textField($model,'id_project'); ?> -->



		<select class="" name="Pantalla[id_project]">
			<?php
			// $data="1";
			$Criteria = new CDbCriteria();
							// $Criteria->condition = "id_project = '".$data."'";
			$project= Project::model()->findAll($Criteria);

			foreach($project as $p){
			?>
			<option value="<?php echo $p["id_project"]; ?>"><?php echo $p["nombre"]; ?></option>

			<?php }?>
		</select>

		

		<?php echo $form->error($model,'id_project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modalidad'); ?>
		<?php echo $form->textField($model,'modalidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'modalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img'); ?>
		<?php echo $form->textField($model,'img',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trabajo'); ?>
		<?php echo $form->textField($model,'trabajo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
