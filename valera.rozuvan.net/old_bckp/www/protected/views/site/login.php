<?php
$this->pageTitle=Yii::t('main','Login');
$this->breadcrumbs=array(
	Yii::t('main','Login'),
);
?>

<div class="cont-top">
    <div class="container">
        <h1 style="text-align: right;"><?=Yii::t('login','page-heading')?></h1>

        <p><?=Yii::t('login','page-short-description')?></p>

        <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>

            <p class="note"><?=Yii::t('login','required-fields')?></p>

            <div class="row">
                <?php echo $form->labelEx($model,'username'); ?>
                <?php echo $form->textField($model,'username'); ?>
                <?php echo $form->error($model,'username'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'password'); ?>
                <?php echo $form->passwordField($model,'password'); ?>
                <?php echo $form->error($model,'password'); ?>
                <?/*
                <p class="hint">
                    Hint: You may login with <tt>demo/demo</tt> or <tt>admin/admin</tt>.
                </p>
                */?>
            </div>

            <div class="row rememberMe">
                <?php echo $form->checkBox($model,'rememberMe'); ?>
                <?php echo $form->label($model,'rememberMe'); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton(Yii::t('login','login-form-login')); ?>
            </div>

        <?php $this->endWidget(); ?>
        </div>
    </div>
</div>