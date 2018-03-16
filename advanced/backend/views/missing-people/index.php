<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MissingPeopleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Missing People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="missing-people-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Entry', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'user_id',
            'submission_id',
            //'photo',
            'first_name',
            'middle_name',
            'last_name',
            'address',
            'marital_status',
            'sex',
            // 'birthdate',
            // 'age',
            // 'occupation',
            // 'date_of_disappearance',
            // 'time_of_disappearance',
            // 'last_seen',
            // 'relationship_with_person',
            // 'height',
            // 'weight',
            // 'eye_color',
            // 'hair_length',
            // 'hair_color',
            // 'facial_hair',
            // 'facial_hair_color',
            // 'facial_hair_length',
            // 'ear_shape',
            // 'eyebrows_size',
            // 'nose_size',
            // 'hand_size',
            // 'feet_size',
            // 'distinguishing_features',
            // 'scar_location',
            // 'tattoo_location',
            // 'birthmark_location',
            // 'mole_location',
            // 'upper_garment',
            // 'upper_garment_color',
            // 'lower_garment',
            // 'lower_garment_color',
            // 'footwear',
            // 'eyewear',
            // 'glasses_color',
            // 'contact_lens_color',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
