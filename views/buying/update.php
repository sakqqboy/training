<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\Buying */

$this->title = 'Update Buying: ' . ' ' . $model->buy_id;
$this->params['breadcrumbs'][] = ['label' => 'Buyings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->buy_id, 'url' => ['view', 'id' => $model->buy_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="buying-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
