<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>

        <p class="lead">Now you can manage the database.</p>

    </div>

    <div class="body-content">

            <?php
            use yii\bootstrap\Nav;
            
            echo Nav::widget([
                    'items' => [
                        ['label' => 'User', 'url' => ['/user/index']],
                        ['label' => 'Loan', 'url' => ['/loan/index']],
                        ['label' => 'Invest', 'url' => ['/invest/index']],
                    ],
            ]);
            ?>

    </div>
</div>
