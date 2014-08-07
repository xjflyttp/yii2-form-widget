yii2-form-widget
================

https://github.com/malsup/form/

composer.json
-----
```json
"require": {
        "xj/yii2-form-widget": "*"
},
```

In View
---------
```php
use xj\form\FormAsset;
FormAsset::register($this);
```

In Assets depends
-----------
```php
public $depends = [
    'xj\form\FormAsset',
];
```