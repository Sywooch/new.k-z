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
    public $baseUrl = '@web';
    public $css = [
        'css/menu.gkmenu.css',
        'css/reset.css',
        'css/layout.css',
        'css/joomla.css',
        'css/template.css',
        'css/menu.css',
        'css/gk.stuff.css',
        'css/typography.style1.css',
        'css/typography.iconset.1.css',
        'css/typography.iconset.2.css',
        'css/typography.iconset.3.css',
        'css/style1.css',
        'fonts/BebasNeue/stylesheet.css',
        'm1/css/style.css',
        'm2/css/template.css',
        'm3/gk_ajax_search.css',
        'm1/css/style.portal.mode.4.css',
        'css/laststyle.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
