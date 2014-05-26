Chosen + Bootstrap 3 + Yii2
===========================

Credits
-------
Chosen http://harvesthq.github.io/chosen/
Chosen Bootstrap Look & Feel https://github.com/dbtek/chosen-bootstrap (with my style fixes)

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
        'disableSearch' => 5,
        'clientOptions' => [
            'search_contains' => true,
            'single_backstroke_delete' => false
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
    'allowDeselect' => false,
    'clientOptions' => [
        'search_contains' => true
    ]
]);?>
```
