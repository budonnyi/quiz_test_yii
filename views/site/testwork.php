<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Примитивная форма';

?>

<div class="site-about">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'question')->textInput() ?>

    <?= $form->field($model, 'radio')
        ->radioList([
            '0' => '0',
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8' => '8',
            '9' => '9',
            '10' => '10',
        ], [
            'id' => 'blog_type',
            'class' => 'btn-group',
            'data-toggle' => 'buttons',
            'unselect' => null,
            'item' => function ($index, $label, $name, $checked, $value) {
                return '<label class="btn btn-primary' . ($checked ? ' active' : '') . '">' .
                    Html::radio($name, $checked, ['value' => $value, 'class' => 'project-status-btn']) . $label . '</label>';
            },
        ]);
    ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => '6']) ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
