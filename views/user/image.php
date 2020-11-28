<?php

use app\models\Model_of_car;
use app\models\Technics;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Technics */
/* @var $form yii\widgets\ActiveForm */
?>
    <div class="container-fluid">
        <div class="row">    
            <div class="col-12 col-xl drop-area-container">
                <div class="card drop-area" style="width: auto; height: auto;">
                    <div class="card-body">
                            <div class="dropzone dz-clickable">
                            <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'image')->fileInput(['class'=>'dropzone'])->label('')?>
    <div class="form-group">
        <span class="btn pull-left"><?= Html::a(( 'Назад'),['/'],
                ['class'=>'btn btn-danger',]) ?></span>
        <span class="btn pull-right"><?= Html::submitButton( 'Сохранить', ['class' => 'btn btn-success']) ?>
            </span>
    </div>
<?php ActiveForm::end(); ?> -->

<!-- <script src="/js/dropzone.min.js"></script> -->
<?
$csrfparam = Yii::$app->request->csrfParam;
$csrftoken = Yii::$app->request->getCsrfToken();
$script = <<< JS
$(document).ready(function() {
if ($().dropzone && !$(".dropzone").hasClass("disabled")) {
      $(".dropzone").dropzone({
        maxFiles: 1,
        url: "/user/image",
        init: function () {
            this.on('sending', function(file, xhr, formData) {
                formData.append("$csrfparam", "$csrftoken");
                // formData.append("filename", file.name);
                // formData.append("ImageInput", file, file.name)
                formData.append('user_id', file.size);
            });  
            this.on("success", function (file, responseText) {
                console.log(responseText);
            });
        },
        thumbnailWidth: 160,
        previewTemplate: '<div class="dz-preview dz-file-preview mb-3"><div class="d-flex flex-row "><div class="p-0 w-30 position-relative"><div class="dz-error-mark"><span><i></i></span></div><div class="dz-success-mark"><span><i></i></span></div><div class="preview-container"><img data-dz-thumbnail class="img-thumbnail border-0" /><i class="simple-icon-doc preview-icon" ></i></div></div><div class="pl-3 pt-2 pr-2 pb-1 w-70 dz-details position-relative"><div><span data-dz-name></span></div><div class="text-primary text-extra-small" data-dz-size /><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div><a href="#/" class="remove" data-dz-remove><i class="glyph-icon simple-icon-trash"></i></a></div>'
      });
    }
});
JS;
$this->registerJs($script);

?>     
