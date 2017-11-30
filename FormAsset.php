<?php

namespace xj\form;

use yii\web\AssetBundle;

class FormAsset extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-form-widget/assets';
    public $css = [];
    public $js = ['jquery.form.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
