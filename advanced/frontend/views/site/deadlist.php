<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use backend\models\DeadPeople;
use yii\db\ActiveRecord;

$this->title = 'Dead List';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?></h1>

<iframe src = "http://localhost:8080/SOFTDEV/php/deadDataFetch.php" width = "100%" height = "500px" frameborder = "0"> </iframe>