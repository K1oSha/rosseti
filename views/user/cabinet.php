<?php

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
                        <div class="row app-row" style="padding-right: 0px;" >
                    <div class="col-12 chat-app">
                    <div class="scroll ps ps--active-y" >
                        <div class="scroll-content">
                            <div class="card d-inline-block mb-3 float-left mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:25</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="/img/profile-pic-l.jpg" class="/img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 truncate list-item-heading">Sarah Kortney</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            What do you think about our plans for this product launch?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-left mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:30</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="/img/profile-pic-l.jpg" class="/img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 truncate list-item-heading">Sarah Kortney</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            How do you think we should move forward with this project? As you know, we
                                            are
                                            expected to present it to our clients next
                                            week. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-right  mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:41</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="/img/profile-pic-l-4.jpg" class="/img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 list-item-heading truncate">Mimi Carreira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            I would suggest you discuss this further with the advertising team.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-right  mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:41</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="/img/profile-pic-l-4.jpg" class="/img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 list-item-heading truncate">Mimi Carreira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            I am very busy at the moment and on top of everything, I forgot my umbrella
                                            today.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-right mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:41</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="/img/profile-pic-l-4.jpg" class="/img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 list-item-heading truncate">Mimi Carreira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            I am very busy at the moment and on top of everything, I forgot my umbrella
                                            today.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix" style=""></div>
                        </div>
                        <div class="app-menu" style="">
                            <ul class="nav nav-tabs card-header-tabs ml-0 mr-0 mb-1" role="tablist">
                                <li class="nav-item w-50 text-center">
                                    <a class="nav-link active" id="first-tab" data-toggle="tab" href="#firstFull" role="tab" aria-selected="true">Messages</a>
                                </li>
                                <li class="nav-item w-50 text-center">
                                    <a class="nav-link" id="second-tab" data-toggle="tab" href="#secondFull" role="tab" aria-selected="false">Contacts</a>
                                </li>
                            </ul>

                            <div class="p-4 h-100">
                                <div class="form-group">
                                    <input type="text" class="form-control rounded" placeholder="Search">
                                </div>
                                <div class="tab-content h-100">
                                    <div class="tab-pane fade h-100 active show" id="firstFull" role="tabpanel" aria-labelledby="first-tab">

                                        <div class="scroll ps">

                                            <div class="d-flex flex-row mb-1 border-bottom pb-3 mb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class=" mb-0 truncate">Sarah Kortney</p>
                                                            </a>
                                                            <p class="mb-1 text-muted text-small">14:20</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="d-flex flex-row mb-1 border-bottom pb-3 mb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-2.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class=" mb-0 truncate">Rasheeda Vaquera</p>
                                                            </a>
                                                            <p class="mb-1 text-muted text-small">11:10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-1 border-bottom pb-3 mb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-3.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class=" mb-0 truncate">Shelia Otterson</p>
                                                            </a>
                                                            <p class="mb-1 text-muted text-small">09:50</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-1  pb-3 mb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-4.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class=" mb-0 truncate">Latarsha Gama</p>
                                                            </a>
                                                            <p class="mb-1 text-muted text-small">09:10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                    </div>

                                    <div class="tab-pane fade h-100" id="secondFull" role="tabpanel" aria-labelledby="second-tab">
                                        <div class="scroll ps">

                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Sarah Kortney</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-2.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Williemae Lagasse</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-3.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Tommy Nash</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-4.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Mayra Sibley</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-5.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Kathryn Mengel</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-2.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Williemae Lagasse</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-3.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Tommy Nash</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-4.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Mayra Sibley</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-3.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Tommy Nash</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-4.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Mayra Sibley</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-5.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Kathryn Mengel</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-2.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Williemae Lagasse</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-3.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Tommy Nash</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mb-3 pb-3">
                                                <a class="d-flex" href="#">
                                                    <img alt="Profile Picture" src="img/profile-pic-l-4.jpg" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                        <div class="min-width-zero">
                                                            <a href="#">
                                                                <p class="mb-0 truncate">Mayra Sibley</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

                                    </div>
                                </div>
                            </div>

                            <a class="app-menu-button d-inline-block" href="#">
                                <i class="simple-icon-options"></i>
                            </a>
                        </div>
                            <div class="w-100">
                                <input class="form-control flex-grow-1" type="text" style="width: 80%; display: inline;" placeholder="Say something...">
                                    <button type="button" class="btn btn-outline-primary icon-button large">
                                        <i class="simple-icon-paper-clip"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary icon-button large">
                                        <i class="simple-icon-arrow-right"></i>
                                    </button>

                            </div>
                        </div>
                        
                    <div class="ps__rail-x" style=""><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 153px; height: 747px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 127px; height: 620px;"></div></div></div>
                </div>
                
            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Product Categories</h5>
                            <div class="dashboard-donut-chart chart">
                                <canvas id="polarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Logs</h5>

                            <div class="scroll dashboard-logs">

                                <table class="table table-sm table-borderless">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-1 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New user registiration</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">14:12</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">13:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">14 products added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:55</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Napoleonshat</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:44</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Cremeschnitte</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:30</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:40</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">2 categories added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:28</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">08:20</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tickets</h5>

                            <div class="scroll dashboard-list-with-user">
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="/img/image_2020-11-13_01-14-275fc0eed827fe8.png" alt="Mayra Sibley"
                                            class="/img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                            <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="/img/image_2020-11-13_01-14-275fc0eed827fe8.png" alt="Mimi Carreira"
                                            class="/img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mimi Carreira</p>
                                            <p class="text-muted mb-0 text-small">05.08.2018 - 10:20</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="/img/image_2020-11-13_01-14-275fc0eed827fe8.png" alt="Philip Nelms"
                                            class="/img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Philip Nelms</p>
                                            <p class="text-muted mb-0 text-small">05.08.2018 - 09:12</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="/img/image_2020-11-13_01-14-275fc0eed827fe8.png" alt="Terese Threadgill"
                                            class="/img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Terese Threadgill</p>
                                            <p class="text-muted mb-0 text-small">01.08.2018 - 18:20</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="/img/image_2020-11-13_01-14-275fc0eed827fe8.png" alt="Kathryn Mengel"
                                            class="/img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Kathryn Mengel</p>
                                            <p class="text-muted mb-0 text-small">27.07.2018 - 11:45</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="/img/image_2020-11-13_01-14-275fc0eed827fe8.png" alt="Esperanza Lodge"
                                            class="/img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Esperanza Lodge</p>
                                            <p class="text-muted mb-0 text-small">24.07.2018 - 15:00</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Calendar</h5>
                            <div class="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Best Sellers</h5>
                            <table class="data-table data-table-standard responsive nowrap"
                                data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Sales</th>
                                        <th>Stock</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Marble Cake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1452</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">62</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Fruitcake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1245</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">65</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Chocolate Cake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1200</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">45</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Bebinca</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1150</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">4</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Napoleonshat</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1050</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">41</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Magdalena</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">998</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">24</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Salzburger Nockerl</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">924</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">20</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Soufflé</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">905</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">64</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Cremeschnitte</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">845</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">12</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Cheesecake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">830</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">36</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Gingerbread</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">807</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">21</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Goose Breast</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">795</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card dashboard-progress">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="simple-icon-refresh"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Profile Status</h5>
                            <div class="mb-4">
                                <p class="mb-2">
                                    <span>Basic Information</span>
                                    <span class="float-right text-muted">12/18</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Portfolio
                                    <span class="float-right text-muted">1/8</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Billing Details
                                    <span class="float-right text-muted">2/6</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Interests
                                    <span class="float-right text-muted">0/8</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Legal Documents
                                    <span class="float-right text-muted">1/2</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card dashboard-sq-banner justify-content-end">
                        <div class="card-body justify-content-end d-flex flex-column">
                            <span class="badge badge-pill badge-theme-3 align-self-start mb-3">DORE</span>
                            <p class="lead text-white">MAGIC IS IN THE DETAILS</p>
                            <p class="text-white">Yes, it is indeed!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card dashboard-link-list">
                        <div class="card-body">
                            <h5 class="card-title">Cakes</h5>
                            <div class="d-flex flex-row">
                                <div class="w-50">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1">
                                            <a href="#">Marble Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fruitcake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Chocolate Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fat Rascal</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Financier</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Genoise</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Gingerbread</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Goose Breast</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Parkin</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Petit Gâteau</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Salzburger Nockerl</a>
                                        </li>
                                        <li>
                                            <a href="#">Soufflé</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="w-50">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1">
                                            <a href="#">Streuselkuchen</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Tea Loaf</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Napoleonshat</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Merveilleux</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Magdalena</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Cremeschnitte</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Cheesecake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Bebinca</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fruitcake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Chocolate Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fat Rascal</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Financier</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row sortable">
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Payment Status</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="40"
                                data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Work Progress</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="64"
                                data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Tasks Completed</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="75"
                                data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Payments Done</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="32"
                                data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Website Visits</h5>
                                    <span class="text-muted text-small d-block">Unique Visitors</span>
                                </div>
                            </div>
                            <div class="btn-group float-right float-none-xs mt-2">
                                <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Week
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="visitChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Conversion Rates</h5>
                                    <span class="text-muted text-small d-block">Per Session</span>
                                </div>
                            </div>
                            <div class="btn-group float-right mt-2 float-none-xs">
                                <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Week
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="conversionChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-4">
                    <div class="row">
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-file mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">5 Files</p>
                                            <p class="text-small text-white">Pending for print</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div role="progressbar"
                                            class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                            aria-valuenow="5" aria-valuemax="12" data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-male mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">4 Orders</p>
                                            <p class="text-small text-white">On approval process</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar"
                                            class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                            aria-valuenow="4" aria-valuemax="6" data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <a href="#"
                                    class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-bell mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">8 Alerts</p>
                                            <p class="text-small text-white">Waiting for notice</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar"
                                            class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                            aria-valuenow="8" aria-valuemax="10" data-show-percent="false">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-lg-6 col-sm-12 mb-4">
                    <div class="card dashboard-search">
                        <div class="card-body">
                            <h5 class="text-white mb-3">Advanced Search</h5>
                            <div class="form-container">
                                <form>
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control select2-single" data-width="100%">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                            <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                            <option value="TPZ">The Panic Zone</option>
                                            <option value="TTZ">The Twilight Zone</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-control select2-single" data-width="100%">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                            <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                            <option value="TPZ">The Panic Zone</option>
                                            <option value="TTZ">The Twilight Zone</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-5">
                                        <label>Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text input-group-append input-group-addon">

                                                <i class="simple-icon-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Price Range</label>
                                        <div>
                                            <div class="slider" id="dashboardPriceRange"></div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-lg mt-3">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-4">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart2"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart4"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card dashboard-top-rated">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="simple-icon-refresh"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right mt-3">
                                <a class="dropdown-item" href="#">Top Sold Items</a>
                                <a class="dropdown-item" href="#">Top Commented Items</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Top Rated Items</h5>

                            <div class="glide best-rated-items">
                                <div class="glide__track" data-glide-el="track">
                                    <div class="glide__slides">
                                        <div class="glide__slide">
                                            <img src="/img/image_2020-11-13_01-14-275fc0eed827fe8.png" alt="Cheesecake" class="mb-4">
                                            <h6 class="mb-1"><span class="mr-2">1.</span>Cheesecake</h6>
                                            <select class="rating" data-current-rating="5" data-readonly="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                        </div>
                                        <div class="glide__slide">
                                            <img src="/img/image_2020-11-13_01-14-275fc0eed827fe8.png" alt="Chocolate Cake" class="mb-4">
                                            <h6 class="mb-1"><span class="mr-2">2.</span>Chocolate Cake</h6>
                                            <select class="rating" data-current-rating="5" data-readonly="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                        </div>
                                        <div class="glide__slide">
                                            <img src="/img/image_2020-11-13_01-14-275fc0eed827fe8.png" alt="Cremeschnitte" class="mb-4">
                                            <h6 class="mb-1"><span class="mr-2">3.</span>Cremeschnitte</h6>
                                            <select class="rating" data-current-rating="5" data-readonly="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                        </div>

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
