<?php
/* @var $this PartnersController */
/* @var $model Partners */
/* @var $form CActiveForm */
?>




<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partners-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'img'); ?>
		<?php echo $form->textField($model,'img',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'img'); ?>
	</div>

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


		$("div#dropzone-example").dropzone({ url: "<?php echo Yii::app()->getBaseUrl(true); ?>/partners/upload/",
				init: function() {
	                this.on("sending", function(file, xhr, formData){
							$("#imagen-cargada").hide();
							$("#imagen-cargando").show();

	                        formData.append("nombreImg",$("#Partners_img").val());

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

	<div class="row buttons">
		<!-- <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?> -->
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
