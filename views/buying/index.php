<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buyings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buying-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Buying', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'buy_id',
            'user_id',
            'date:ntext',
            'date_app:ntext',
            'date_finish:ntext',
            // 'approver',
            // 'status',
            // 'reason:ntext',
            // 'reason_manager:ntext',
            // 'for_work',
            // 'major',
            // 'subject',
            // 'date_use:ntext',
            // 'year',
            // 'term',
            // 'number',
            // 'number_reinvoice',
            // 'number_rebuy',
            // 'number_invoice',
            // 'number_comein',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
