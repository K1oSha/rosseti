<?php

use app\models\Request;
use yii\helpers\Html;
use yii\web\View;
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
                        <button type="button" class="btn-lg btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                        Сохранить
                    </button>
                <?= Html::submitButton('Сохранить', ['id' => 'submitbtn','class' => 'btn-lg btn-outline-primary ','data-toggle'=>"modal", 'data-target'=>"#exampleModal", 'style'=>'display: none;']) ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Вы получили достижение!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                                        <div class="card-body text-center">
                                                <i class="iconsminds-pen lead" style="width: 100px; height: 100px;"></i>
                                                <p class="lead text-center">Почетный автор</p>
                                                <p class="card-text mb-0">Предложить идею</p>
                                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="modalbtn" class="btn btn-primary">Ок</button>
            </div>
        </div>
    </div>
</div>


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
        $("#modalbtn").on('click', function() {
        $("#submitbtn").click()
    });
    if ($().dropzone && !$(".dropzone").hasClass("disabled")) {
        $(".dropzone").dropzone({
            // maxFiles: 1,
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