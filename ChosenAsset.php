<?php
/**
 * @copyright Copyright (c) 2014 Roman Ovchinnikov
 * @link https://github.com/RomeroMsk
 * @version 1.0.0
 */
namespace nex\chosen;

use yii\web\AssetBundle;

/**
 * ChosenAsset
 *
 * @author Roman Ovchinnikov <nex.software@gmail.com>
 * @link https://github.com/RomeroMsk/yii2-chosen
 * @see http://harvesthq.github.io/chosen
 */
class ChosenAsset extends AssetBundle
{
    public $sourcePath = '@vendor/nex/yii2-chosen/assets';

    public $css = [
        'css/chosen.bootstrap.css'
    ];

    public $js = [
        'js/chosen.jquery.js'
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}
