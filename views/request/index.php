<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Request', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'requestId',
            'userId',
            'date:ntext',
            'dateApp:ntext',
            'dateFinish:ntext',
            // 'approver',
            // 'status',
            // 'reason:ntext',
            // 'reasonManager:ntext',
            // 'forwork',
            // 'major',
            // 'subject',
            // 'dateUse:ntext',
            // 'year',
            // 'term',
            // 'number',
            // 'numberReinvoice',
            // 'numberRebuy',
            // 'numberInvoice',
            // 'numberComein',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
