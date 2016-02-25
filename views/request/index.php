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
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'requestId',
            'userId',
            'date:ntext',
            'dateApp:ntext',
            'approver',
            'status',
            'reason:ntext',
            'requestTypeId',
            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                //'template' => '{view} {update} {delete} {taking} {borrowing} {buying}',
                'template' => '{view}',
            ],
        ],
    ]);
    ?>
</div>
