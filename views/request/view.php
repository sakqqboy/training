<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\science\Request */

$this->title = $model->requestId;
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->requestId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->requestId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'requestId',
            'userId',
            'date:ntext',
            'dateApp:ntext',
            'dateFinish:ntext',
            'approver',
            'status',
            'reason:ntext',
            'reasonManager:ntext',
            'forwork',
            'major',
            'subject',
            'dateUse:ntext',
            'year',
            'term',
            'number',
            'numberReinvoice',
            'numberRebuy',
            'numberInvoice',
            'numberComein',
        ],
    ]) ?>

</div>
