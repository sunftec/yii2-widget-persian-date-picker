<?php
/**
 * @link https://github.com/2amigos/yii2-file-input-widget
 * @copyright Copyright (c) 2015 Ahmad M.Rezaee
 * @package yii2-widgets
 */
namespace parsa53\datepicker;
use yii\web\AssetBundle;

/**
 * Persian date picker asset
 */
class PersianDatePickerAsset extends AssetBundle
{
    public $sourcePath = 'vendor/parsa53/yii2-widget-persianDatePicker/src';
    public $css = [
        'css/adatepicker-main.css',
    ];
    public $js = [
        'js/amibdatepicker.min.js',
    ];
}