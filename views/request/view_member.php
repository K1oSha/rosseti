<?php

use app\models\Request;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="request-view">

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="jumbotron">
                        <h1 class="display-4"><?= $model->problem?></h1>
                        <p class="lead">Категория проблемы: <?= \app\models\Categorie::find()->where(['id'=>$model->category_id])->one()->name?></p>
                        <p class="lead">Предложил идею: <?= \app\models\UserRecord::find()->where(['id'=>$model->author_id])->one()->name?></p>
                        <hr class="my-4">
                        <h3><strong>Решение</strong></h3>
                        <p><?= $model->solution?></p>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-12">



                                <div class="row icon-cards-row mb-4">
                                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 mb-4">
                                        <a href="chat?request_id=<?=$model->id?>" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-speach-bubble-dialog"></i>
                                                <p class="card-text font-weight-semibold mb-0">Перейти в чат группы</p>

                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
