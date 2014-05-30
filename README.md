Chosen + Bootstrap 3 + Yii2
===========================

Credits
-------
Chosen http://harvesthq.github.io/chosen/
Chosen Bootstrap Look & Feel https://github.com/dbtek/chosen-bootstrap (with my style fixes)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "nex/yii2-chosen" "*"
```

or add

```json
"nex/yii2-chosen" : "*"
```

to the `require` section of your application's `composer.json` file.

Usage
-----
**With a model**

```
<?php
use nex\chosen\Chosen;
?>

<?= Chosen::widget([
    'model' => $model,
    'attribute' => 'selectable_attr',
    'items' => [1 => 'First item', 2 => 'Second item', 3 => 'Third item'],
    'multiple' => true,
]);?>

<?= $form->field($model, 'selectable_attr')->widget(
    Chosen::className(), [
        'items' => [1 => 'First item', 2 => 'Second item', 3 => 'Third item'],
        'disableSearch' => 5, // Search input will be disabled while there are fewer than 5 items
        'clientOptions' => [
            'search_contains' => true,
            'single_backstroke_delete' => false,
        ]
]);?>
```
**Without a model**

```
<?php
use nex\chosen\Chosen;
?>
<?= Chosen::widget([
    'name' => 'ChosenTest',
    'value' => 3,
    'items' => [1 => 'First item', 2 => 'Second item', 3 => 'Third item'],
    'allowDeselect' => false,
    'disableSearch' => true, // Search input will be disabled
    'clientOptions' => [
        'search_contains' => true,
        'max_selected_options' => 2,
    ]
]);?>
```
