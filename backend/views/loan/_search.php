<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LoanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'loan_type') ?>

    <?= $form->field($model, 'userid') ?>

    <?= $form->field($model, 'realname') ?>

    <?= $form->field($model, 'idcard') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
