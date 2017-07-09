<?php
/**
 * @copyright Copyright (c) 2017 Newerton Vargas de Araújo
 * @link http://newerton.com.br
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace newerton\fancybox3;

use yii\web\AssetBundle;

class FancyBoxAsset extends AssetBundle
{
    public $sourcePath = '@bower/fancybox';

    public $css = [
        'dist/jquery.fancybox' . (!YII_DEBUG ? '.min' : '') . '.css'
    ];

    public $js = [
        'dist/jquery.fancybox' . (!YII_DEBUG ? '.min' : '') . '.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 