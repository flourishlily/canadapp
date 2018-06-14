<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User; 
use yii\widgets\ActiveForm;
use frontend\models\ChgPwdForm; 
/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var frontend\models\ChgPwdForm $model
 */

$this->title = 'ChangePassword';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php 
    Yii::info("yesyesyo");
    if(! \Yii::$app->user->isGuest)
    {  Yii::info("nnnno");

        //用户已登录
        //Yii::info(Yii::$app->user);
        $user = new User();
        //if($model->load(Yii::$app->request->post())) {
        $var = Yii::$app->user->identity->username;
        $user = $user->findByUsername($var);
        $model = new ChgPwdForm();
               
    }else{
        Yii::info( 'nologin');
    }
?>

<div class="right">

    <?php $form = ActiveForm::begin(['id' => 'chgPwd-form']); ?>
 
        <div class="login"><?= $form->field($model, 'old_password')->passwordInput() ?></div>
        <div class="login"><?= $form->field($model, 'new_password')->passwordInput() ?></div>
        <div class="login"><?= $form->field($model, 'new_password_repeat')->passwordInput() ?></div>
        <div class="login">
            <?= Html::submitButton('Submit', ['class' => 'sbtn btn btn-primary']) ?>
        </div>
 
    <?php ActiveForm::end(); ?>
    <?php if(\Yii::$app->session->hasFlash('contact')):?>
    <div>
        <?php echo Yii::$app->session->getFlash('contact'); ?>
    </div>
    <?php endif; ?>
</div>
