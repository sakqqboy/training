<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\Taking */

$this->title = 'Update Taking: ' . ' ' . $model->take_id;
$this->params['breadcrumbs'][] = ['label' => 'Takings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->take_id, 'url' => ['view', 'id' => $model->take_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="taking-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
