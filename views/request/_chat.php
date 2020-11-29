<? 
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
            
                    <div class="card">
                    <div class="row app-row"  style="padding-right: 0px;">
                    <div class="col-12 chat-app">
                        <div class="scroll ps ps--active-y">
                            <div class="scroll-content">
                                <?php Pjax::begin(['id'=>'pjax-container']); ?>
                                    <? $new_count = count($messages); ?>
                                        <?= Html::a("Обновить", ['request/view','id'=>$model->id,'count'=>$new_count], ['class' => 'btn btn-lg btn-primary', 'style'=>'display: none;','id'=>'refreshButton']) ?>
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
    
                                <?php Pjax::end(); ?>

     
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
                                        <?= Html::beginForm(['request/view', 'id'=>$model->id], 'post', ['data-pjax' => 'true', 'class' => 'form-inline', 'style'=>'z-index:10; width: 100%;']); ?>
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
                    </div>
                </div>
            </div>
            
            <?
$script = <<< JS
// function scrollDown(){
//     $("html, body").animate({ scrollTop: $(document).height() }, "fast");
// }

function checkNew()
{
    // let msgs = $new_count;
    // let count = $count;
    // console.log(msgs);
    // console.log(count);
    // console.log(count);
    if (msgs > count){
        scrollDown();
    }
}

$(document).ready(function() {
    
    setInterval(function(){ $("#refreshButton").click(); }, 3000);
    scrollDown();
    $('#sendMessage').on('click',function() {
        $('#pjax-form').on('pjax:success', function() {
            $('#message-text').val('');
            $("#refreshButton").click();
            scrollDown(); 
        });
    })
    
    
    $('#pjax-container').on('pjax:success', function() {
        checkNew();
    });
});

JS;
$this->registerJs($script);
?>