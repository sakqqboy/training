<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\Appendage */

$this->title = 'Update Appendage: ' . ' ' . $model->appen_id;
$this->params['breadcrumbs'][] = ['label' => 'Appendages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->appen_id, 'url' => ['view', 'id' => $model->appen_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appendage-update">

    <h1><?php echo  Html::encode($this->title) ?></h1>

    <?php echo  $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
