<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\LoanForm; //kang
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var common\models\Loan $model
 */
$this->title = 'UserLoan';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Your loan list is:</h1>
<?php 
    Yii::info("yesyesyo");
    if(! \Yii::$app->user->isGuest)
    {  Yii::info("nnnno");

        //用户已登录
        //Yii::info(Yii::$app->user);
        $model = new LoanForm();
        //if($model->load(Yii::$app->request->post())) {
            $var = Yii::$app->user->identity->username;
            $loanInfo = $model->getLoanInfoByUserId($var);
            $pagination = new Pagination([
                'defaultPageSize' => 5,
                'totalCount' => $loanInfo->count(),
            ]);

            $loanList = $loanInfo->orderBy('phone')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();

            if($loanList)
            {
                Yii::info( 'success');
            }else{
                Yii::info('failed');
            }
            
            $provider = new ActiveDataProvider([
                'query' => $loanInfo,
                'pagination' => [
                    'pageSize' => 5,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'created_at' => SORT_DESC,
                        'amount' => SORT_ASC,
                    ]
                ],
            ]);                    
        //}else{
        //    echo 'noload';
        //}

    }else{
        Yii::info( 'nologin');
    }
?>

<div style="float: left; margin: 10px; padding: 10px; width: 900px; text-align: center;">
    
    <?= GridView::widget([
        'dataProvider' => $provider,
        'columns' => [
            'id',
            'loan_type',
            'userid',
            'realname',
            'idcard',
            //'phone',
            //'amount',
            //'username',
            //'created_at',
            //'updated_at',

        ],
    ]); ?>
</div>
<div class="clear"></div>



