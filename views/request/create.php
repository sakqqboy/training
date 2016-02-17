<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use backend\models\Standard;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\science\Request */

$this->title = 'Create Request';
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
        'requestDetail' => $requestDetail,
        'dataProvider' => $dataProvider
    ])
    ?>

</div>
