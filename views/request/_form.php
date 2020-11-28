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

                    <h3>Категория проблемы</h3>
                    <?= $form->field($model, 'category_id')->dropDownList(\app\models\Categorie::getList_categories()
                        ,['class'=>'btn btn-outline-primary dropdown-toggle mb-1 btn-lg']


                    )->label('') ?>
                    <h3>Статус заявки</h3>
                    <?= $form->field($model, 'id_state')->dropDownList(\app\models\Request::getStateList_author()
                        ,['class'=>'btn btn-outline-primary dropdown-toggle mb-1 btn-lg']

                    )->label('') ?>
                </div>
            </div>





        </div>
    </div>
    <script src="/js/ckeditor.js"></script>



    <div class="row">
        <div class="col-12">


                <?= Html::submitButton('Сохранить', ['class' => 'btn-lg btn-outline-primary ']) ?>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

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
