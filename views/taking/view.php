<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\science\Taking */

$this->title = $model->take_id;
$this->params['breadcrumbs'][] = ['label' => 'Takings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taking-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->take_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->take_id], [
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
            'take_id',
            'user_id',
            'date:ntext',
            'date_app:ntext',
            'date_finish:ntext',
            'approver',
            'status',
            'reason:ntext',
            'for_work',
            'major',
            'subject',
            'year',
            'term',
            'number',
        ],
    ]) ?>

</div>
