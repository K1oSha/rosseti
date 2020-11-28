<?php
/**
 * Created by PhpStorm.
 * User: ingener
 * Date: 24.11.2020
 * Time: 20:52
 */

namespace app\assets;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/iconsminds.css',
        'css/simple-line-icons.css',
        'css/bootstrap.min.css',
        'css/bootstrap.rtl.only.min.css',
        'css/component-custom-switch.min.css',
        'css/dropzone.min.css',
        'css/fullcalendar.min.css',
        'css/perfect-scrollbar.css',
        'css/glide.core.min.css',
        'css/dataTables.bootstrap4.min.css',
        'css/datatables.responsive.bootstrap4.min.css',
        'css/main.css',
        'css/dore.light.blue.min.css',
    ];
    public $js = [
        'js/bootstrap.bundle.min.js',
        'js/dropzone.min.js',
        'js/Chart.bundle.min.js',
        'js/chartjs-plugin-datalabels.js',
        'js/datatables.min.js',
        'js/perfect-scrollbar.min.js',
        'js/glide.min.js',
        'js/scripts.js',
        'js/dore.script.js',
        'js/jquery.autoellipsis.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}