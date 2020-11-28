<?php
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Technics */
/* @var $form yii\widgets\ActiveForm */
?>
    <div class="container-fluid">
        <!-- <div class="row">    
            <div class="col-12 col-xl drop-area-container">
                <div class="card drop-area" style="width: auto; height: auto;">
                    <div class="card-body">
                            <div class="dropzone dz-clickable">
                            <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                    </div>
                </div>
            </div>
        </div> -->
        <script>
    let msgs;
    let count;
    </script>
            <div class="row">
                <div class="col-12">
                    <h1>Личный кабинет</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <!-- <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol> -->
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="icon-cards-row">
                        <div class="glide dashboard-numbers">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-clock"></i>
                                                <p class="card-text mb-0">Друзей</p>
                                                <p class="lead text-center">16</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-basket-coins"></i>
                                                <p class="card-text mb-0">Заработано</p>
                                                <p class="lead text-center">1203912</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-arrow-refresh"></i>
                                                <p class="card-text mb-0">Рейтинг</p>
                                                <p class="lead text-center">255</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-mail-read"></i>
                                                <p class="card-text mb-0">Сообщений</p>
                                                <p class="lead text-center">25</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="icon-cards-row">
                        <div class="glide achievements">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-bio-hazard"></i>
                                                <p class="card-text mb-0">Быть молодцом 100 раз</p>
                                                <p class="lead text-center">Супер молодец</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-bio-hazard"></i>
                                                <p class="card-text mb-0">Выйграть что тоывалоыв...</p>
                                                <p class="lead text-center">Жесткий</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-bio-hazard"></i>
                                                <p class="card-text mb-0">разрзарза</p>
                                                <p class="lead text-center">огого</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-bio-hazard"></i>
                                                <p class="card-text mb-0">Не ну вы видели?</p>
                                                <p class="lead text-center">ыыы</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="glide__arrows slider-nav" data-glide-el="controls">
                                    <button class="glide__arrow glide__arrow--left left-arrow btn btn-link"
                                        data-glide-dir="<"><i class="simple-icon-arrow-left"></i></button>
                                    <div class="glide__bullets slider-dot-container" data-glide-el="controls[nav]">
                                        <button class="glide__bullet slider-dot" data-glide-dir="=0"></button>
                                        <button class="glide__bullet slider-dot" data-glide-dir="=1"></button>
                                        <button class="glide__bullet slider-dot" data-glide-dir="=2"></button>
                                        <button class="glide__bullet slider-dot" data-glide-dir="=3"></button>
                                        <button class="glide__bullet slider-dot" data-glide-dir="=4"></button>
                                    </div>
                                    <button class="glide__arrow glide__arrow--right right-arrow btn btn-link"
                                        data-glide-dir=">"><i class="simple-icon-arrow-right"></i></button>
                                </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="position-absolute card-top-buttons">

                                    <button class="btn btn-header-light icon-button" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="simple-icon-refresh"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right mt-3">
                                        <a class="dropdown-item" href="#">Sales</a>
                                        <a class="dropdown-item" href="#">Orders</a>
                                        <a class="dropdown-item" href="#">Refunds</a>
                                    </div>

                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Sales</h5>
                                    <div class="dashboard-line-chart chart">
                                        <canvas id="salesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card">
                <div class="row app-row "  style="padding-right: 0px;">
                    <div class="col-12 chat-app">
                        <div class="scroll ps ps--active-y">
                            <div class="scroll-content">
                                <?php Pjax::begin(['id'=>'pjax-container']); ?>
                                    <? $new_count = count($messages); ?>
                                        <?= Html::a("Обновить", ['request/chat','request_id'=>$model->id,'count'=>$new_count], ['class' => 'btn btn-lg btn-primary', 'style'=>'display: none;','id'=>'refreshButton']) ?>
                                        <? 
                                        if ($new_count)
                                        {
                                            foreach($messages as $message){
                                                $pos = 'left';
                                                if ($message->user_id == Yii::$app->user->identity->id) $pos='right';
                                            ?>

                                            <div class="card d-inline-block mb-3 float-<?=$pos?> mr-2" style="min-width: 50%">
                                                <div class="position-absolute pt-1 pr-2 r-0">
                                                    <span class="text-extra-small text-muted"><?= $message->creation_time ?></span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex flex-row pb-2">
                                                        <a class="d-flex" href="#">
                                                            <img alt="Profile Picture" src="/img/<?= \app\models\UserIdentity::getAvatarUrlById($message->user_id)?>" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                        </a>
                                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                                            <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                                <div class="min-width-zero">
                                                                    <p class="mb-0 truncate list-item-heading"><?= \app\models\UserIdentity::getNameById($message->user_id)?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="chat-text-left">
                                                        <p class="mb-0 text-semi-muted"">
                                                            <?= $message->text ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <?
                                            }
                                        }
                                        ?>
    

     
                                </div>
                            </div>
                        </div>

                    <!-- <div class="ps__rail-x"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div> -->
                    
                    <!-- <div class="ps__rail-y"><div class="ps__thumb-y" tabindex="0" style="top: 133px; height: 584px"></div></div></div> -->
                </div>
                <!-- style="width: 80%; display: inline;" -->
                <style>
                    #pjax-form{
                        width: 100%;
                        margin-left: 3%;
                        margin-right: 5%;
                        text-align: center;
                    }
                </style>
                <div class=" d-flex justify-content-between align-items-center" style="width: 100%;" >
                    <?php Pjax::begin(['id'=>'pjax-form']); ?>
                            <?= Html::beginForm(['user/cabinet'], 'post', ['data-pjax' => 'true', 'class' => 'form-inline', 'style'=>'z-index:10; width: 100%;']); ?>
                                    <?= Html::input('text','Message[text]', '', ['autofocus'=>'','id'=>'message-text','placeholder'=>'Отправить сообщение...','class' => 'form-control flex-grow-1']) ?>
                                    <?= Html::input('text','Message[user_id]', Yii::$app->user->identity->id, ['id'=>'message-user_id', 'style'=>'display: none;' ]) ?>
                                    <?= Html::input('text','Message[request_id]', $model->id, ['id'=>'message-request_id', 'style'=>'display: none;']) ?>
                                    <!-- <?= Html::input('text','count', count($messages), ['id'=>'count', 'style'=>'display: none;']) ?> -->
                                    <?= Html::submitButton('<i class="simple-icon-arrow-right"></i>', ['id'=>'sendMessage','class' => 'btn btn-primary icon-button large']) ?>
                            <?= Html::endForm() ?>
                    <?php Pjax::end(); ?>
                </div>


        <div class="app-menu">
            <ul class="nav nav-tabs card-header-tabs ml-0 mr-0 mb-1" role="tablist">
                <li class="nav-item w-100 text-center">
                    <a class="nav-link active" id="second-tab" data-toggle="tab" href="#secondFull" role="tab" aria-selected="false">Участники</a>
                </li>
            </ul>

            <div class="p-4 h-100">
                <div class="tab-content h-100">
                    <div class="tab-pane fade show active  h-100" id="firstFull" role="tabpanel" aria-labelledby="first-tab">

                        <div class="scroll ps">

                            <? foreach($users as $user){ ?>
                                <div class="d-flex flex-row mb-1 border-bottom pb-3 mb-3">
                                    <img alt="Profile Picture" src="/img/<?=$user->avatar_url?>" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                    <div class="d-flex flex-grow-1 min-width-zero">
                                        <div class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                            <div class="min-width-zero">
                                                <a href="#">
                                                    <p class=" mb-0 truncate"><?= $user->name ?></p>
                                                </a>
                                                <p class="mb-1 text-muted text-small">Супер пупер сотрудник</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    </div>
                </div>
            </div>

            <a class="app-menu-button d-inline-block" href="#">
                <i class="simple-icon-options"></i>
            </a>
        </div>

                <script>
                msgs = <?= $new_count ?>;
                count = <?=  $count ?> ;
                </script>
            <?php Pjax::end(); ?>


        <div class="app-menu">
            <ul class="nav nav-tabs card-header-tabs ml-0 mr-0 mb-1" role="tablist">
                <li class="nav-item w-100 text-center">
                    <a class="nav-link active" id="second-tab" data-toggle="tab" href="#secondFull" role="tab" aria-selected="false">Участники</a>
                </li>
            </ul>

            <div class="p-4 h-100">
                <div class="tab-content h-100">
                    <div class="tab-pane fade show active  h-100" id="firstFull" role="tabpanel" aria-labelledby="first-tab">

                        <div class="scroll ps">

                            <? foreach($users as $user){ ?>
                                <div class="d-flex flex-row mb-1 border-bottom pb-3 mb-3">
                                    <img alt="Profile Picture" src="/img/<?=$user->avatar_url?>" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                    <div class="d-flex flex-grow-1 min-width-zero">
                                        <div class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                            <div class="min-width-zero">
                                                <a href="#">
                                                    <p class=" mb-0 truncate"><?= $user->name ?></p>
                                                </a>
                                                <p class="mb-1 text-muted text-small">Супер пупер сотрудник</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    </div>
                </div>
            </div>

            <a class="app-menu-button d-inline-block" href="#">
                <i class="simple-icon-options"></i>
            </a>
        </div>
            </div>
                
            </div>
                    </div>
                </div>
            </div>
            <div class="row">
            
                <div class="card col-lg-12">
                            <div class="card-body">
                                <h5 class="mb-4">Статистика</h5>
                                <div class="row">
                                    <div class="col-lg-6 mb-5">
                                        <h6 class="mb-4">Количество одобренных заявок</h6>
                                        <div class="chart-container chart"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="areaChart" width="463" height="300" class="chartjs-render-monitor" style="display: block; width: 463px; height: 300px;"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <h6 class="mb-4">Доход</h6>
                                        <div class="chart-container chart"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="areaChartNoShadow" width="463" height="300" class="chartjs-render-monitor" style="display: block; width: 463px; height: 300px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
    </div>
    <!-- <div class="form-group">
        <span class="btn pull-left"><?= Html::a(( 'Назад'),['/'],
                ['class'=>'btn btn-danger',]) ?></span>
        <span class="btn pull-right"><?= Html::submitButton( 'Сохранить', ['class' => 'btn btn-success']) ?>
            </span>
    </div> -->

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
        previewTemplate: '<div class="dz-preview dz-file-preview mb-3"><div class="d-flex flex-row "><div class="p-0 w-30 position-relative"><div class="dz-error-mark"><span><i></i></span></div><div class="dz-success-mark"><span><i></i></span></div><div class="preview-container"><img data-dz-thumbnail class="/img-thumbnail border-0" /><i class="simple-icon-doc preview-icon" ></i></div></div><div class="pl-3 pt-2 pr-2 pb-1 w-70 dz-details position-relative"><div><span data-dz-name></span></div><div class="text-primary text-extra-small" data-dz-size /><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div><a href="#/" class="remove" data-dz-remove><i class="glyph-icon simple-icon-trash"></i></a></div>'
      });
    }
});


if (typeof Glide !== "undefined") {

// Details Images
// if ($(".glide.details").length > 0) {
//   var glideThumbCountMax = 5;
//   var glideLength = $(".glide.thumbs li").length;
//   var perView = Math.min(glideThumbCountMax, glideLength);

//   var glideLarge = new Glide(".glide.details", {
//     bound: true,
//     rewind: false,
//     focusAt: 0,
//     perView: 1,
//     startAt: 0,
//     direction: 'ltr',
//   });

//   var glideThumbs = new Glide(".glide.thumbs", {
//     bound: true,
//     rewind: false,
//     perView: perView,
//     perTouch: 1,
//     focusAt: 0,
//     startAt: 0,
//     direction: 'ltr',
//     breakpoints: {
//       576: {
//         perView: Math.min(4, glideLength)
//       },
//       420: {
//         perView: Math.min(3, glideLength)
//       }
//     }
//   });

//   $(".glide.thumbs").css("width", perView * 70);
//   addActiveThumbClass(0);

//   $(".glide.thumbs li").on("click", function (event) {
//     var clickedIndex = $(event.currentTarget).index();
//     glideLarge.go("=" + clickedIndex);
//     addActiveThumbClass(clickedIndex);
//   });

//   glideLarge.on(["swipe.end"], function () {
//     addActiveThumbClass(glideLarge.index);
//   });

//   glideThumbs.on("resize", function () {
//     perView = Math.min(glideThumbs.settings.perView, glideLength);
//     $(".glide.thumbs").css("width", perView * 70);
//     if (perView >= $(".glide.thumbs li").length) {
//       $(".glide.thumbs .glide__arrows").css("display", "none");
//     } else {
//       $(".glide.thumbs .glide__arrows").css("display", "block");
//     }
//   });

//   function addActiveThumbClass(index) {
//     $(".glide.thumbs li").removeClass("active");
//     $($(".glide.thumbs li")[index]).addClass("active");
//     var gap = glideThumbs.index + perView;
//     if (index >= gap) {
//       glideThumbs.go(">");
//     }
//     if (index < glideThumbs.index) {
//       glideThumbs.go("<");
//     }
//   }
//   glideThumbs.mount();
//   glideLarge.mount();
// }

// Dashboard Numbers
if ($(".glide.dashboard-numbers").length > 0) {
    // $(".glide.dashboard-numbers").each(function(element) {
    // console.log(this);
    new Glide(".glide.dashboard-numbers", {
    bound: true,
    rewind: false,
    perView: 4,
    perTouch: 1,
    focusAt: 0,
    startAt: 0,
    direction: 'ltr',
    gap: 7,
    breakpoints: {
      1800: {
        perView: 3
      },
      576: {
        perView: 2
      },
      320: {
        perView: 1
      }
    }
    }).mount();
    // });
}
if ($(".glide.achievements").length > 0) {
    // $(".glide.dashboard-numbers").each(function(element) {
    // console.log(this);
    new Glide(".glide.achievements", {
    bound: true,
    rewind: false,
    perView: 4,
    perTouch: 1,
    focusAt: 0,
    startAt: 0,
    type: "carousel",
    direction: 'ltr',
    gap: 7,
    breakpoints: {
      1800: {
        perView: 3
      },
      576: {
        perView: 2
      },
      320: {
        perView: 1
      }
    }
    }).mount();
    // });
}

// Dashboard Best Rated
// if ($(".best-rated-items").length > 0) {
//   new Glide(".best-rated-items", {
//     gap: 10,
//     perView: 1,
//     direction: 'ltr',
//     type: "carousel",
//     peek: { before: 0, after: 100 },
//     breakpoints: {
//       480: { perView: 1 },
//       992: { perView: 2 },
//       1200: { perView: 1 }
//     },
//   }).mount();
// }


// if ($(".glide.basic").length > 0) {
//   new Glide(".glide.basic", {
//     gap: 0,
//     rewind: false,
//     bound: true,
//     perView: 3,
//     direction: 'ltr',
//     breakpoints: {
//       600: { perView: 1 },
//       1000: { perView: 2 }
//     },
//   }).mount();
// }

// if ($(".glide.center").length > 0) {
//   new Glide(".glide.center", {
//     gap: 0,
//     type: "carousel",
//     perView: 4,
//     direction: 'ltr',
//     peek: { before: 50, after: 50 },
//     breakpoints: {
//       600: { perView: 1 },
//       1000: { perView: 2 }
//     },
//   }).mount();
// }

// if ($(".glide.single").length > 0) {
//   new Glide(".glide.single", {
//     gap: 0,
//     type: "carousel",
//     perView: 1,
//     direction: 'ltr',
//   }).mount();
// }



// if ($(".glide.gallery").length > 0) {
//   var enableClick = true;
//   var glideGallery = new Glide(".glide.gallery", {
//     gap: 10,
//     perTouch: 1,
//     perView: 1,
//     type: "carousel",
//     peek: { before: 100, after: 100 },
//     direction: 'ltr'
//   })

//   glideGallery.on(["swipe.move"], function () {
//     enableClick = false;
//   });

//   glideGallery.on(["run.after"], function () {
//     enableClick = true;
//   });

//   glideGallery.mount();

//   $(".glide.gallery").get(0).addEventListener('click', function (event) {
//     if (!enableClick) {
//       event.stopPropagation();
//       event.preventDefault();
//       return false;
//     } else {
//       return true;
//     }
//   }, true);

// }
}

JS;
$this->registerJs($script);

?>     
