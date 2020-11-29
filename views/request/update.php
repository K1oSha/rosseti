<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title = 'Изменение данных в рационализаторской идее ';
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="request-update">

    <div class="row">
        <div class="col-12">
            <h1><?= Html::encode($this->title) ?></h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <a href="/">Новости</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="index">Предложения</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Изменение</li>
                </ol>
            </nav>
            <div class="separator mb-5"></div>
        </div>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'id'=>$id,
    ]) ?>

</div>
