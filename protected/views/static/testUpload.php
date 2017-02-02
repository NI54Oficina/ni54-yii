<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dropzone.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropzone.js"></script>
<div id="dropzone-example" style="width:80%;height:100px;background-color:#c4c4c4;margin:20px;padding:10px;background-image:url(<?php echo Yii::app()->getBaseUrl(true); ?>/img/cargar_img-oscuro.png);background-repeat:no-repeat;background-position:center;"></div>
<div id="imagen-cargada"style="display:none;">Imagen Lista!</div>
<div id="imagen-cargando"style="display:none;">Cargando...</div>
<div id="imagen-finish"></div>
<script>

	$("div#dropzone-example").dropzone({ url: "<?php echo Yii::app()->getBaseUrl(true); ?>/web/upload/",
			init: function() {
                this.on("sending", function(file, xhr, formData){
						$("#imagen-cargada").hide();
						$("#imagen-cargando").show();
						
                        //formData.append("nombre", "portada");
                      
                });
            },
			success: function(data,response){ 
				console.log(response);
				console.log(data);
				
				$("#imagen-cargada").show();
				$("#imagen-cargando").hide();
				//$("#dropzone-example").hide();
				$("#imagen-finish").html(" ");
				$("#imagen-finish").append("<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/"+response+"' style='max-width:100%;' />");
			}
	});
</script>