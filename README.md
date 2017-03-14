yii2-fancybox
=============

jQuery lightbox script for displaying images, videos and more. Touch enabled, responsive and fully customizable. http://fancyapps.com/fancybox/3/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist newerton/yii2-fancybox-3 "*"
```

or add

```
"newerton/yii2-fancybox-3": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
echo newerton\fancybox3\FancyBox::widget();
```

Options
-----
```php
<?php
echo newerton\fancybox3\FancyBox::widget([
    'target' => '[data-fancybox]',
    'config' => [
        // Animation duration in ms
        'speed '        => 300,
        
        // Enable infinite gallery navigation
        'loop'          => true,
        
        // Should zoom animation change opacity, too
        // If opacity is 'auto', then fade-out if image and thumbnail have different aspect ratios
        'opacity'       => 'auto',
        
        // Space around image, ignored if zoomed-in or viewport smaller than 800px
        'margin'        => [44,0],
        
        // Horizontal space between slides
        'gutter'        => 30,

        // Should display toolbars
        'infobar'       => true,
        'buttons'       => true,

        // What buttons should appear in the toolbar
        'slideShow'     => true,
        'fullScreen'    => true,
        'thumbs'        => true,
        'closeBtn'      => true,

        // Should apply small close button at top right corner of the content
        // If 'auto' - will be set for content having type 'html', 'inline' or 'ajax'
        'smallBtn'      => 'auto',
        
        'image'         => [      
            // Wait for images to load before displaying
            // Requires predefined image dimensions
            // If 'auto' - will zoom in thumbnail if 'width' and 'height' attributes are found
            'preload'       => "auto",

            // Protect an image from downloading by right-click
            'protect'       => false
        ],
        
        'ajax' => [
            // Object containing settings for ajax request
            'settings' => [
                // This helps to indicate that request comes from the modal
                // Feel free to change naming
                'data' => [
                    'fancybox'      => true
                ]
            ]
        ],
        
        'iframe' => [

            // Iframe template
            'tpl'           => '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allowtransparency="true" src=""></iframe>',

            // Preload iframe before displaying it
            // This allows to calculate iframe content width and height
            // (note=> Due to "Same Origin Policy", you can't get cross domain data).
            'preload'       => true,

            // Scrolling attribute for iframe tag
            'scrolling'     => 'no',

            // Custom CSS styling for iframe wrapping element
            'css'           => []

        ],
        
        // Custom CSS class for layout
        'baseClass'         => '',

        // Custom CSS class for slide element
        'slideClass'        => '',

        // Base template for layout
        'baseTpl'	        => '<div class="fancybox-container" role="dialog" tabindex="-1">' .
                '<div class="fancybox-bg"></div>' .
                '<div class="fancybox-controls">' .
                    '<div class="fancybox-infobar">' .
                        '<button data-fancybox-previous class="fancybox-button fancybox-button--left" title="Previous"></button>' .
                        '<div class="fancybox-infobar__body">' .
                            '<span class="js-fancybox-index"></span>&nbsp;/&nbsp;<span class="js-fancybox-count"></span>' .
                        '</div>' .
                        '<button data-fancybox-next class="fancybox-button fancybox-button--right" title="Next"></button>' .
                    '</div>' .
                    '<div class="fancybox-buttons">' .
                        '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="Close (Esc)"></button>' .
                    '</div>' .
                '</div>' .
                '<div class="fancybox-slider-wrap">' .
                    '<div class="fancybox-slider"></div>' .
                '</div>' .
                '<div class="fancybox-caption-wrap"><div class="fancybox-caption"></div></div>' .
            '</div>',

        // Loading indicator template
        'spinnerTpl'        => '<div class="fancybox-loading"></div>',

        // Error message template
        'errorTpl'          => '<div class="fancybox-error"><p>The requested content cannot be loaded. <br /> Please try again later.<p></div>',

        // This will be appended to html content, if "smallBtn" option is not set to false
        'closeTpl'          => '<button data-fancybox-close class="fancybox-close-small"></button>',

        // Container is injected into this element
        'parentEl'          => 'body',

        // Enable gestures (tap, zoom, pan and pinch)
        'touch'             => true,

        // Enable keyboard navigation
        'keyboard'          => true,

        // Try to focus on first focusable element after opening
        'focus'             => true,

        // Close when clicked outside of the content
        'closeClickOutside' => true,

        // Callbacks
        'beforeLoad'        => new \yii\web\JsExpression('function(){ console.log("beforeLoad"); }'),
        'afterLoad'         => new \yii\web\JsExpression('function(){ console.log("afterLoad"); }'),
        'beforeMove'        => new \yii\web\JsExpression('function(){ console.log("beforeMove"); }'),
        'afterMove'         => new \yii\web\JsExpression('function(){ console.log("afterMove"); }'),
        'onComplete'        => new \yii\web\JsExpression('function(){ console.log("onComplete"); }'),

        'onInit'            => new \yii\web\JsExpression('function(){ console.log("onInit"); }'),
        'beforeClose'       => new \yii\web\JsExpression('function(){ console.log("beforeClose"); }'),
        'afterClose'        => new \yii\web\JsExpression('function(){ console.log("afterClose"); }'),
        'onActivate'        => new \yii\web\JsExpression('function(){ console.log("onActivate"); }'),
        'onDeactivate'      => new \yii\web\JsExpression('function(){ console.log("onDeactivate"); }')
    ]
]);

echo yii\helpers\Html::a(yii\helpers\Html::img('/folder/thumb.jpg'), '/folder/imagem.jpg', ['data-fancybox' => true]);
?>
```