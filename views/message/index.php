<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">

    
    <div class="row"> 
        <div class="col-12"> 
            <h1><?= Html::encode($this->title) ?></h1>

            <div class="top-right-button-container"> 
                <p>
                    <?= Html::a('Create Message', ['create'], ['class' => 'btn btn-primary btn-lg top-right-button mr-1']) ?>
                </p>
            </div>
        </div>
    </div>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="row">
    
        <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
            <div class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer" id="datatableRows_wrapper">
                <?= GridView::widget([
                    // 'id' => 'datatableRows_wrapper',
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'tableOptions'=> ['class'=>'data-table responsive nowrap dataTable no-footer dtr-inline','style'=> "border-collapse: separate;", 'id'=> 'datatableRows', 'role'=>'grid'],
                    'rowOptions' => function ($model, $key, $index, $grid) {
                        return ['data-id' => $model->id,['class'=> 'even', 'role' => 'row']];
                    },
                    'summaryOptions' => ['class' => 'text-muted text-small '],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'text',
                        'user_id',
                        'request_id',
                        'creation_time',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                    'pager' => [
                        'options' => ['class' => 'pagination pagination-sm'],
                        'class' => 'app\models\extended\Pager',
                    ],
                ]); ?>
            </div>
        </div>
    </div>
    <?php
    $this->registerJs("
    $('tbody td:not(.disable-click)').css('cursor', 'pointer');
    $('table tr td:not(.disable-click)').click(function (e) {       
        var id = $(this).closest('tr').data('id');
        if (e.target == this && id)
            location.href = '" . \yii\helpers\Url::to(['/message/view']) . "?id=' + id;
    });
    ");
    ?>
    <?php Pjax::end(); ?>

</div>
