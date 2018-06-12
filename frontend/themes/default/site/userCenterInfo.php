<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User; 

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'UserInfo';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php 
    Yii::info("yesyesyo");
    if(! \Yii::$app->user->isGuest)
    {  Yii::info("nnnno");

        //用户已登录
        //Yii::info(Yii::$app->user);
        $model = new User();
        //if($model->load(Yii::$app->request->post())) {
        $var = Yii::$app->user->identity->username;
        $model = $model->findByUsername($var);
               
    }else{
        Yii::info( 'nologin');
    }
?>

<div style="float: left; margin: 10px; padding: 10px; width: 900px; text-align: center;">

    <h1>Your base information is:</h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            'intend',
            'status',
            //'role',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>

</div>
