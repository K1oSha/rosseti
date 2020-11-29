<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = 'Рейтинг';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>

.filters td
{
    background-color: white;
    box-shadow: 0 1px 15px rgba(0,0,0,.04), 0 1px 6px rgba(0,0,0,.04);
}
.data-table-rows table thead tr {
    background-color: white;
    box-shadow: 0 1px 15px rgba(0,0,0,.04), 0 1px 6px rgba(0,0,0,.04);
}
</style>
<div class="container-fluid">
    <style>
        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
            background-color: rgba(0, 147, 225, 0.27);
        }
    </style>
    
    <div class="row"> 
        <div class="col-12"> 
            <h1><?= Html::encode($this->title) ?></h1>

            <!-- <div class="top-right-button-container"> 
                <p>
                    <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success btn-lg top-right-button mr-1']) ?>
                </p>
            </div> -->
            <div class="separator mb-5"></div>
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

                    'formatter' => ['class' => 'yii\i18n\Formatter', 'dateFormat' => 'dd-MM-yyyy',],
                    'tableOptions'=> ['class'=>'data-table responsive nowrap dataTable no-footer dtr-inline table-hover','style'=> "border-collapse: separate;", 'id'=> 'datatableRows', 'role'=>'grid',],
                    'rowOptions' => function ($model, $key, $index, $grid) {
                        return ['data-id' => $model->id,['class'=> 'even', 'role' => 'row']];
                    },
                    'summaryOptions' => ['class' => 'text-muted text-small '],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                    // 'headerOptions' => ['style' => 'background-color: yellow;'],
                       
            //            'id',
            //            'author_id',
                    // [
                    //     'attribute' => 'avatar_url',
                    //     // 'header' => '<i class="iconsminds-up---down"></i>Проблема',
                    //     // 'label' => 'First <br /> Name',
                    //     // 'encodeLabel' => false,
                    //     // 'format' => ['text', 2],
                    //     // 'filterOptions' => ['style' => 'background-color: yellow;'],
                    //     'value' => $model->avatar_url,
                    //     'filterInputOptions' => ['class'=>"search d-inline-block float-md-left mr-1 mb-1 align-top", 'style'=>'    border: initial;outline: initial!important;font-size: .8rem;width: 100%;color: #3a3a3a;border-radius: 20px;background: #f8f8f8;border: 1px solid #8f8f8f;padding: .4rem 1rem;line-height: 2;']
                    // ],
            
                    //            'solution:ntext',
                    //            'deleted',
                    ['attribute' => 'name',
                    'label' => 'Имя',
                    'format'=>'html',
                    // return Html::img('/img/' . $model->avatar_url, ['class' => '', 'style' => 'width: 100px;']) . 
                    'value' => function ($model) {return $model->name;},
                    'filterInputOptions' => ['class'=>"search d-inline-block float-md-left mr-1 mb-1 align-top", 'style'=>'    border: initial;outline: initial!important;font-size: .8rem;width: 100%;color: #3a3a3a;border-radius: 20px;background: #f8f8f8;border: 1px solid #8f8f8f;padding: .4rem 1rem;line-height: 2;']
                    ],
                    ['attribute' => 'subdivision_id',
                    'label'=>'Подразделение',
                    'value' => function($model){return $model->getSubdivisions()[$model->subdivision_id];},
                    'filter'=>\app\models\UserRecord::getSubdivisions(),
                    'filterInputOptions' => ['class'=>"search d-inline-block float-md-left mr-1 mb-1 align-top", 'style'=>'    border: initial;outline: initial!important;font-size: .8rem;width: 100%;color: #3a3a3a;border-radius: 20px;background: #f8f8f8;border: 1px solid #8f8f8f;padding: .4rem 1rem;line-height: 2;']
                    ],
                    ['attribute' => 'region',
                    'label' => 'Регион',
                    'value' => function ($model) {return \app\models\UserRecord::getRegions()[$model->region];},
                    'filter'=>\app\models\UserRecord::getRegions(),
                    'filterInputOptions' => ['class'=>"search d-inline-block float-md-left mr-1 mb-1 align-top", 'style'=>'    border: initial;outline: initial!important;font-size: .8rem;width: 100%;color: #3a3a3a;border-radius: 20px;background: #f8f8f8;border: 1px solid #8f8f8f;padding: .4rem 1rem;line-height: 2;']
                    ],
                    ['attribute' => 'rating',
                    'label' => 'Доход',
                    'value' => $model->rating,
                    // 'filter'=>\app\models\Categorie::getList_categories(),
                    'filterInputOptions' => ['class'=>"search d-inline-block float-md-left mr-1 mb-1 align-top", 'style'=>'    border: initial;outline: initial!important;font-size: .8rem;width: 100%;color: #3a3a3a;border-radius: 20px;background: #f8f8f8;border: 1px solid #8f8f8f;padding: .4rem 1rem;line-height: 2;']
                    ],
                    ['attribute' => 'telephone',
                    'label' => 'Количество принятых идей',
                    'value' => $model->telephone,
                    // 'filter'=>\app\models\Categorie::getList_categories(),
                    'filterInputOptions' => ['class'=>"search d-inline-block float-md-left mr-1 mb-1 align-top", 'style'=>'    border: initial;outline: initial!important;font-size: .8rem;width: 100%;color: #3a3a3a;border-radius: 20px;background: #f8f8f8;border: 1px solid #8f8f8f;padding: .4rem 1rem;line-height: 2;']
                    ],
                    // ['attribute' => 'category_id',
                    // 'value' => function($model){return $model->category_name->name;},
                    // 'filter'=>\app\models\Categorie::getList_categories(),
                    // 'filterInputOptions' => ['class'=>"search d-inline-block float-md-left mr-1 mb-1 align-top", 'style'=>'    border: initial;outline: initial!important;font-size: .8rem;width: 100%;color: #3a3a3a;border-radius: 20px;background: #f8f8f8;border: 1px solid #8f8f8f;padding: .4rem 1rem;line-height: 2;']
                    // ],

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                    'pager' => [
                        'options' => ['class' => 'pagination pagination-sm'],
                        'class' => 'app\models\extended\Pager',
                    ],
                ]); ?>
<!--                -->
            </div>
        </div>
    </div>
    <?php
    $this->registerJs("
    $('tbody td:not(.disable-click)').css('cursor', 'pointer');
    $('table tr td:not(.disable-click)').click(function (e) {       
        var id = $(this).closest('tr').data('id');
        if (e.target == this && id)
            location.href = '" . \yii\helpers\Url::to(['/user/view']) . "?id=' + id;
    });
    ");
    ?>
    <?php Pjax::end(); ?>

</div>





