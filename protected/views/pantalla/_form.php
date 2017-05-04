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
			<option value="<?php echo $p["id_project"]; ?>" <?php
			if(isset($model -> id_project) && $model -> id_project==$p["id_project"] ){ echo "selected"; }
			 ?>><?php echo $p["nombre"]; ?></option>

			<?php }?>
		</select>



		<?php echo $form->error($model,'id_project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modalidad'); ?>
		<?php echo $form->textField($model,'modalidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'modalidad'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'img'); ?>
		<?php echo $form->textField($model,'img',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'img'); ?>
	</div> -->

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

	<!-- <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div> -->

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dropzone.css">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropzone.js"></script>

	<style >
		.response{
			text-align: center;
			color:gray;
			font-size: 1.5em;

		}
	</style>
	<div id="dropzone-example" style="width:80%;height:100px;background-color:#c4c4c4;margin:20px;padding:10px;background-image:url(<?php echo Yii::app()->getBaseUrl(true); ?>/img/cargar_img-oscuro.png);background-repeat:no-repeat;background-position:center;"></div>

	<div id="imagen-finish"></div>

	<script>


		$("div#dropzone-example").dropzone({ url: "<?php echo Yii::app()->getBaseUrl(true); ?>/pantalla/upload/",
				init: function() {
	                this.on("sending", function(file, xhr, formData){
							$("#imagen-cargada").hide();
							$("#imagen-cargando").show();

							formData.append("idPantalla", $('select[name="Pantalla[id_project]"]').val());




	                });
	            },
				success: function(data,response){
					console.log(response);
					console.log(data);

					//$("#dropzone-example").hide();
					$("#imagen-finish").append("<h1 class='response'>ImagenCargada: " +response+"</h1>");
				}
		});
	</script>
	

<?php $this->endWidget(); ?>

</div><!-- form -->
