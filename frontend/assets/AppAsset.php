<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/statics';
    public $css = [
        //'css/site.css',
        'vendor/plugins/summernote/summernote.css',
        'assets/skin/default_skin/css/theme.css',
        'assets/admin-tools/admin-forms/css/admin-forms.css',
        
    ];
    public $js = [
        //'vendor/bootstrap/js/bootstrap.min.js',
        //'vendor/jquery/jquery-1.11.1.min.js',
        'vendor/jquery/jquery_ui/jquery-ui.min.js',
        'vendor/plugins/summernote/summernote.min.js',
        'assets/js/utility/utility.js',
        'assets/js/demo/demo.js',
        'assets/js/main.js',
        'vendor/plugins/jvectormap/jquery.jvectormap.min.js',
        'vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js',
        'vendor/plugins/jvectormap/assets/jquery-jvectormap-world-mill-en.js',
    ];
    public $depends = [
        /* bootstrap.js ������
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        */
        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',
     
    ];
    public static function addScript($view, $jsfile)
    {
        $view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'backend\assets\AppAsset']);
    
    }
    
    public static function addCss($view, $cssfile)
    {
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'backend\assets\AppAsset']);
    }
    
   
}
