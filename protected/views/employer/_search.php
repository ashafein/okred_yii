<?php
/* @var $this EmployerController */
/* @var $model Employer */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
    )); ?>

    <div class="row">
        <?php echo $form->label($model,'id'); ?>
        <?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'email'); ?>
        <?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'fio'); ?>
        <?php echo $form->textField($model,'fio',array('size'=>45,'maxlength'=>45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'id_parent'); ?>
        <?php echo $form->textField($model,'id_parent',array('size'=>10,'maxlength'=>10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'role'); ?>
        <?php echo $form->textField($model,'role',array('size'=>10,'maxlength'=>10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'id_company'); ?>
        <?php echo $form->textField($model,'id_company',array('size'=>10,'maxlength'=>10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'id_city'); ?>
        <?php echo $form->textField($model,'id_city',array('size'=>10,'maxlength'=>10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'created_at'); ?>
        <?php echo $form->textField($model,'created_at'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'updated_at'); ?>
        <?php echo $form->textField($model,'updated_at'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->