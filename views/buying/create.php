<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\science\Buying */

$this->title = 'Create Buying';
$this->params['breadcrumbs'][] = ['label' => 'Buyings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buying-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
