<?php

use yii\helpers\Html;
use panix\engine\bootstrap\ActiveForm;


/**
 * @var \panix\mod\companies\models\Companies $model
 */
?>
<div class="row">
    <div class="col-md-12">
        <?php $form = ActiveForm::begin(); ?>
        <div class="card">
            <div class="card-header">
                <h5><?= Html::encode($this->context->pageName) ?></h5>
            </div>
            <div class="card-body">

                <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>
                <?= $form->field($model, 'address')->textInput(['maxlength' => 255]) ?>
                <?= $form->field($model, 'phone')->textInput(['maxlength' => 14]) ?>
                <?= $form->field($model, 'edrpou')->textInput(['maxlength' => 30]) ?>
                <?= $form->field($model, 'active')->checkbox() ?>
            </div>
            <div class="card-footer text-center">
                <?= $model->submitButton(); ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
