<?php
/**
 * @link    http://hiqdev.com/yii2-asset-select2-bootstrap3-css
 * @license http://hiqdev.com/yii2-asset-select2-bootstrap3-css/license
 * @copyright Copyright (coffee) 2015 HiQDev
 */

namespace hiqdev\assets\select2_bootstrap3_css;

/**
 * Class Asset
 *
 * @package hipanel\yii2-asset-select2-bootstrap-css
 */
class Select2Bootstrap3CssAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/silverfire/select2-bootstrap3-css';
    public $css = ['select2-bootstrap.min.css'];
    public $publishOptions = ['only' => ['select2-bootstrap.min.css']];
}
