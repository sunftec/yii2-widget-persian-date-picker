<?php
/**
 * @link https://github.com/2amigos/yii2-file-input-widget
 * @copyright Copyright (c) 2015 Ahmad M.Rezaee
 * @package yii2-widgets
 */
namespace parsa53\datepicker;

use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Persian date picker
 */
class PersianDatePicker extends InputWidget
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            $id = $this->options['id'];
            echo $field  = Html::activeTextInput($this->model, $this->attribute, $this->options);
            echo $field2 = Html::activeHiddenInput($this->model, $this->attribute, ['id' => $id . '-hidden']);
        } else {
            echo $field  = Html::textInput($this->name, $this->value, $this->options);
            echo $field2 = Html::hiddenInput($this->name, $this->value, ['id' => $id . '-hidden']);
        }
        $this->registerClientScript();
    }
    
    /**
     * @inheritdoc
     */
    public function registerClientScript()
    {
        require 'PersianDatePickerAsset.php';
        $view = $this->getView();
        PersianDatePickerAsset::register($view);
        $id = $this->options['id'];
        $js="var objCal3 = new AMIB.datePicker('$id', {
            initialDateJD: AMIB.getTodayJD(),
            supportGregorian: false,
            extraInputID: '$id-hidden',
            extraInputFormat: 'UT'
        });";
        $view->registerJs($js);
    }

}