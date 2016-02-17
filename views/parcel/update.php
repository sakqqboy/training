<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\Parcel */

$this->title = 'Update Parcel: ' . ' ' . $model->par_id;
$this->params['breadcrumbs'][] = ['label' => 'Parcels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->par_id, 'url' => ['view', 'id' => $model->par_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parcel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
