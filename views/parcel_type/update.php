<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\ParcelType */

$this->title = 'Update Parcel Type: ' . ' ' . $model->type_id;
$this->params['breadcrumbs'][] = ['label' => 'Parcel Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type_id, 'url' => ['view', 'id' => $model->type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parcel-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
