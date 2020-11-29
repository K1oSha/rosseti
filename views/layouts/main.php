<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this)
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body id="app-container" class="ltr flat menu-default show-spinner">
    <?php $this->beginBody() ?>
    <nav class="navbar fixed-top">

        <!--   левый навбар -->
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Внеси свой вклад в развитие компании!</h2>
        </div>


        <!-- logo -->
        <a class="navbar-logo" href="/">

            <span class="logo d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <!--    правый навбар -->
        <?if (Yii::$app->user->isGuest):?>
            <div class="navbar-right">
                <div class="header-icons d-inline-block align-middle">


                    <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                        <i class="simple-icon-size-fullscreen"></i>
                        <i class="simple-icon-size-actual"></i>
                    </button>

                </div>

                <div class="user d-inline-block">
                    <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <span class="name">Вы не вошли в аккаунт</span>
                        <span>
                        <img alt="Profile Picture" src="/img/guest_icon.jpg" />
                    </span>
                    </button>

                </div>
            </div>
        <?php else:?>

            <div class="navbar-right">
                <div class="header-icons d-inline-block align-middle">




                    <div class="position-relative d-inline-block">
                        <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="simple-icon-bell"></i>
                            <span class="count">2</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                            <div class="scroll">
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">

                                        <img src="/img/notification-thumb-3.jpg" alt="Notification Image"
                                             class="/img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-1">Ваше заявление %sample name% было возвращено на доработку</p>
                                            <p class="text-muted mb-0 text-small">28.11.2020 - 12:45</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 ">
                                    <a href="#">
                                        <img src="/img/notification-thumb-3.jpg" alt="Notification Image"
                                             class="/img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-1">У вас новое сообщение! Проверьте свой кабинет
                                            </p>
                                            <p class="text-muted mb-0 text-small">28.11.2020 - 12:45</p>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                        <i class="simple-icon-size-fullscreen"></i>
                        <i class="simple-icon-size-actual"></i>
                    </button>

                </div>
                <? $avatar=\app\models\UserRecord::find()->where(['id'=>Yii::$app->user->getId()])->one()->avatar_url?>
                <div class="user d-inline-block">
                    <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <span class="name"><?= Yii::$app->user->identity->name ?></span>
                        <span>
                    <? if($avatar==null):?>
                        <img alt="Profile Picture" src="/img/guest_icon.jpg" />
                    <?php else:?>
                        <img alt="Profile Picture" src="/img/<?=$avatar?>" />
                    <?php endif; ?>
                    </span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right mt-3">
                        <!-- <a class="dropdown-item" href="/user/image">Изменить фотографию</a> -->
                        <a class="dropdown-item" href="/user/cabinet">Кабинет</a>
                        <a class="dropdown-item" href="/user/logout">Выйти</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </nav>
    <!---->
    <?if (Yii::$app->user->isGuest):?>
        <div class="menu">
            <div class="main-menu">
                <div class="scroll">
                    <ul class="list-unstyled">
                        <li class="<?= $this->params['part'] == 'user' ? 'active' : ''; ?>">
                            <a href="/user/login">
                                <i class="simple-icon-user-following"></i>
                                <span>Войти</span>
                            </a>
                        </li>
                        <li >
                            <a href="/user/join">
                                <i class="iconsminds-shop-4"></i>
                                <span>Зарег</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php else:?>
        <div class="menu">
            <div class="main-menu">
                <div class="scroll">
                    <ul class="list-unstyled">
                        <li class="<?= $this->params['part'] == 'user' ? 'active' : ''; ?>">
                            <a href="/request/index">
                                <i class="iconsminds-idea"></i>
                                <span>Предложения</span>
                            </a>
                        </li>
<!--                        <li class="--><?//= $this->params['part'] == 'user' ? 'active' : ''; ?><!--">-->
<!--                            <a href="/categorie/index">-->
<!--                                <i class="iconsminds-open-book"></i>-->
<!--                                <span>Категории</span>-->
<!--                            </a>-->
<!--                        </li>-->
                        <li class="<?= $this->params['part'] == 'user' ? 'active' : ''; ?>">
                            <a href="/user/rating">
                                <i class="iconsminds-medal"></i>
                                <span>Рейтинг</span>
                            </a>
                        </li>
                        <li class="<?= $this->params['part'] == 'user' ? 'active' : ''; ?>">
                            <a href="/user/statistic">
                                <i class="iconsminds-statistic"></i>
                                <span>Статистика</span>
                            </a>
                        </li>
                        <li class="<?= $this->params['part'] == 'user' ? 'active' : ''; ?>">
                            <a href="/user/logout">
                                <i class="simple-icon-user-unfollow"></i>
                                <span>Выйти</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <main>
        <?=$content?>
    </main>

    <?php $this->endBody() ?>
    <footer class="page-footer" style="z-index: -10;">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">Developed by AKPK.Co 2020 for Rosseti</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
    </html>
<?php $this->endPage() ?>