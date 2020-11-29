<div class="container-fluid">
            <div class="row  ">
                <div class="col-12">

                    <h1>Общая статистика</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Домашняя</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Пользователь</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Общая статистика</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Статусы предложений</h5>
                                    <span class="text-muted text-small d-block">По месяцам</span>
                                </div>
                            </div>
                            <div class="btn-group float-right float-none-xs mt-2">
                                <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    В этом году
                                </button>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                                <canvas id="productChart"></canvas>
                            </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Количество предложений</h5>
                                    <span class="text-muted text-small d-block">По регионам</span>
                                </div>
                            </div>
                            <div class="btn-group float-right mt-2 float-none-xs">
                                <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    В  этом году
                                </button>
                                <!-- <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="conversionChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 col-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Статусы предложений сейчас</h5>
                            <div class="dashboard-donut-chart chart">
                                <canvas id="categoryChart"></canvas>
                            </div>
                            <div class="btn-group float-right mt-2 float-none-xs">
                                <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    В  этом году
                                </button>
                                <!-- <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Принятые - На реализации</h5>
                            <div class="chart-container chart">
                                <canvas id="radarChart"></canvas>
                            </div>
                            <div class="btn-group float-right mt-2 float-none-xs">
                                <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    В  этом году
                                </button>
                                <!-- <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>