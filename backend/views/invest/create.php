<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Invest */

$this->title = 'Create Invest';
$this->params['breadcrumbs'][] = ['label' => 'Invests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
