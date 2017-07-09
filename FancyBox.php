<?php

/**
 * @copyright Copyright (c) 2017 Newerton Vargas de Araújo
 * @link http://newerton.com.br
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package yii2-fancybox-3
 * @version 1.0.0
 */

namespace newerton\fancybox3;

use yii\base\Widget;
use yii\helpers\Json;
use yii\base\InvalidConfigException;

/**
 * fancyBox is a tool that offers a nice and elegant way to add zooming
 * functionality for images, html content and multi-media on your webpages
 *
 * @author Newerton Vargas de Araújo <contato@newerton.com.br>
 * @since 1.0
 */
class FancyBox extends Widget
{

    /**
     * @var type string target of the widget
     */
    public $target = '[data-fancybox]';

    /**
     *
     * @var type array of config settings for fancybox
     */
    public $config = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (is_null($this->target)) {
            throw new InvalidConfigException('"FancyBox.target has not been defined.');
        }
        // publish the required assets
        $this->registerClientScript();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();
        $config = Json::encode($this->config);
        $view->registerJs("jQuery('{$this->target}').fancybox({$config});");
    }

    /**
     * Registers required script for the plugin to work as DatePicker
     */
    public function registerClientScript()
    {
        $view = $this->getView();
        FancyBoxAsset::register($view);
    }

}