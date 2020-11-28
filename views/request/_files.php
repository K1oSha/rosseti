<? if (count($files))
{ ?>
    <? foreach($files as $file)
    {  
        if (strripos($file->name,'jpg') or strripos($file->name, 'png'))
        {
            $url = "/file/$file->name";
        }
        else
        {
            $url = "/file/file.png";
        }
        ?>
        
        <div class="col-xxl-12 col-xl-12 col-12">
            <div class="card d-flex flex-row mb-4 media-thumb-container">
                <a class="d-flex align-self-center" href="#">
                    <img src="<?=$url?>" alt="Загруженный" class="list-media-thumbnail responsive border-0" style="width: 50px;">
                </a>
                <div class="d-flex flex-grow-1 min-width-zero">
                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                        <a href="/file/<?=$file->name?>" class="w-100">
                            
                            <p class="list-item-heading mb-1 truncate"><?=$file->name ?></p>
                        </a>
                        <? if (strripos($file->name,'mp4')) { ?>
                                <div class="video-view">
                                <video style="height: 300px;" id="my-video" class="video-js card-img-top" controls preload="auto"
                                    poster="/file/<?=$file->name?>" data-setup="{}">
                                    <source
                                        src="/file/<?=$file->name?>"
                                        type='video/mp4'>
                                </video>
                                <!-- Youtube Video -->
                                <!-- <video id="vid1" class="video-js vjs-default-skin" controls data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=YE7VzlLtp-4"}] }'> -->
                            </div>  
                            <? } ?>
                        <!-- <p class="mb-1 text-muted text-small w-100 truncate">16.09.2018 14:08</p> -->
                    </div>
                    <div class="pl-1 align-self-center">
                    </div>
                </div>
            </div>
        </div>
    <? } ?>
  
<? } ?>
    