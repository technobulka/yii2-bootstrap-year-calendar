<?php
namespace tecnocen\yearcalendar\assets;

use yii\web\AssetBundle;

/**
 * @author Angel Guevara <angeldelcaos@gmail.com>
 */
class Calendar extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/technobulka/bootstrap-year-calendar';
    /**
     * @inheritdoc
     */
    public $js = ['js/bootstrap-year-calendar.js'];
    /**
     * @inheritdoc
     */
    public $css = ['css/bootstrap-year-calendar.css'];
    /**
     * @inheritdoc
     */
    public $depends = ['yii\\bootstrap\\BootstrapPluginAsset'];
}
