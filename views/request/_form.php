<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Request */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="request-form">


    <div class="row">
        <div class="col-6">

            <div class="card mb-4">
                <div class="card-body ">
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'problem') ?>

                    <?= $form->field($model, 'solution')->textarea(['name'=>'content','id'=>'ckEditorClassic']) ?>
                    <div class="">    
                        <div class="drop-area-container" style="height: 100%;" >
                            <div class="card drop-area" style="width: auto; height: auto;">
                                <div class="card-body">
                                        <div class="dropzone dz-clickable">
                                        <div class="dz-default dz-message"><span>Бросьте файлы сюда для загрузки</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Категория проблемы</h3>
                    <?= $form->field($model, 'category_id')->dropDownList(\app\models\Categorie::getList_categories()
                        ,['class'=>'btn btn-outline-primary dropdown-toggle mb-1 btn-lg']
                    )->label('') ?>
                    <h3>Статус заявки</h3>
                    <?= $form->field($model, 'id_state')->dropDownList(\app\models\Request::getStateList_author()
                        ,['class'=>'btn btn-outline-primary dropdown-toggle mb-1 btn-lg']
                    )->label('') ?>
                <?= Html::submitButton('Сохранить', ['class' => 'btn-lg btn-outline-primary ']) ?>



                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
    <script src="/js/ckeditor.js"></script>
    <?php
//$script = <<< JS
//
//$("#data").on('click',g);
// function g(){
//var a=document.getElementsByClassName("ck ck-content ck-editor__editable ck-rounded-corners ck-blurred ck-editor__editable_inline");
//
//$(".ck ck-content ck-editor__editable ck-rounded-corners ck-blurred ck-editor__editable_inline").val(a[0].innerHTML)
//}
//JS;
//$script = <<< JS
//
//window.onload = function(){
//    var topagge = document.getElementById("ckEditorClassic")[0].innerHTML;
//    console.log(topagge);
//    alert(topagge)
//}
//JS;

    //$this->registerJs($script);
    ?>
</div>
<?
$csrfparam = Yii::$app->request->csrfParam;
$csrftoken = Yii::$app->request->getCsrfToken();
$script = <<< JS
    $(document).ready(function() {
    if ($().dropzone && !$(".dropzone").hasClass("disabled")) {
        $(".dropzone").dropzone({
            maxFiles: 1,
            url: "/request/upload",
            init: function () {
                this.on('sending', function(file, xhr, formData) {
                    formData.append("$csrfparam", "$csrftoken");
                    formData.append("requestid", "$id");
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