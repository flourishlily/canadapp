<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Loan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'loan_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userid')->textInput() ?>

    <?= $form->field($model, 'realname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idcard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
