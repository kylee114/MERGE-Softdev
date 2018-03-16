<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Volunteer */
/* @var $form ActiveForm */
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'volunteer_experience')
                    ->dropDownList([
                    '0'=>'Lots of volunteer experience',
                    '1'=>'Minimal volunteer experience',
                    '2'=>'None'],
                    ['prompt'=>'Select one'])
                    ->label('Did you have any volunteer experience in the past?') ?>

                <?= $form->field($model, 'occupation') ?>

                <?= $form->field($model, 'educational_attainment')
                    ->dropDownList([
                    '0'=>'Elementary Graduate',
                    '1'=>'High School Graduate',
                    '2'=>'College Graduate',
                    '3'=>'None'],
                    ['prompt'=>'Select one'])?>

                <?= $form->field($model, 'availability')
                    ->dropDownList([
                    '0'=>'Mornings (Mon - Fri)',
                    '1'=>'Afternoons (Mon - Fri)',
                    '2'=>'Evenings (Mon - Fri)',
                    '3'=>'Weekends',
                    '4'=>'Once a week',
                    '5'=>'More than once a week',
                    '6'=>'One time only',
                    '7'=>'As needed',
                    '8'=>'Other'],
                    ['prompt'=>'Select one'])
                    ->label('When can you be called for volunteer work?') ?>

                <?= $form->field($model, 'serve_many_people')
                    ->dropDownList([
                    '0'=>'Yes',
                    '1'=>'No'],
                    ['prompt'=>'Select one'])
                    ->label('Can you serve more than one person?') ?>

                <?= $form->field($model, 'driver_license')
                    ->dropDownList([
                    '0'=>'Yes',
                    '1'=>'No'],
                    ['prompt'=>'Select one'])
                    ->label('Do you have a driver\'s license?') ?>

                <?= $form->field($model, 'convicted')
                    ->dropDownList([
                    '0'=>'Yes',
                    '1'=>'No'],
                    ['prompt'=>'Select one'])
                    ->label('Have you been convicted for violation of any laws?') ?>

                <?= $form->field($model, 'physical_limitation')
                    ->dropDownList([
                    '0'=>'Yes',
                    '1'=>'No'],
                    ['prompt'=>'Select one'])
                    ->label('Do you have any physical condition that may limit your activities?') ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>