<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\science\Buying */

$this->title = $model->buy_id;
$this->params['breadcrumbs'][] = ['label' => 'Buyings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buying-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->buy_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->buy_id], [
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
            'buy_id',
            'user_id',
            'date:ntext',
            'date_app:ntext',
            'date_finish:ntext',
            'approver',
            'status',
            'reason:ntext',
            'reason_manager:ntext',
            'for_work',
            'major',
            'subject',
            'date_use:ntext',
            'year',
            'term',
            'number',
            'number_reinvoice',
            'number_rebuy',
            'number_invoice',
            'number_comein',
        ],
    ]) ?>

</div>
