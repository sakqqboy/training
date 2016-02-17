<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\Request */

$this->title = 'Update Request: ' . ' ' . $model->requestId;
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->requestId, 'url' => ['view', 'id' => $model->requestId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="request-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
