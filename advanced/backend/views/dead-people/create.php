<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DeadPeople */

$this->title = 'Create Dead People';
$this->params['breadcrumbs'][] = ['label' => 'Dead Peoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dead-people-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
