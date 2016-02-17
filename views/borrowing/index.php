<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Borrowings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="borrowing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Borrowing', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'borrow_id',
            'user_id',
            'date:ntext',
            'date_app:ntext',
            'date_finish:ntext',
            // 'date_return:ntext',
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
