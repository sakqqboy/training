<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Takings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taking-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Taking', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'take_id',
            'user_id',
            'date:ntext',
            'date_app:ntext',
            'date_finish:ntext',
            // 'approver',
            // 'status',
            // 'reason:ntext',
            // 'for_work',
            // 'major',
            // 'subject',
            // 'year',
            // 'term',
            // 'number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
