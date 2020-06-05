<?php

namespace xj\form;

use yii\web\AssetBundle;

class FormAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-form/src';
    public $js = [
		'jquery.form.js'
	];
    public $depends = ['yii\web\JqueryAsset'];
}
