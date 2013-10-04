<?php
/* @var $this WorkmanController */
/* @var $model Workman */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'workman-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'phone'); ?>
        <?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'phone'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->textField($model,'password',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'avatar'); ?>
        <?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>1024)); ?>
        <?php echo $form->error($model,'avatar'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'fio'); ?>
        <?php echo $form->textField($model,'fio',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'fio'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'id_education_lvl'); ?>
        <?php echo $form->textField($model,'id_education_lvl',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'id_education_lvl'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gender'); ?>
        <?php echo $form->textField($model,'gender',array('size'=>6,'maxlength'=>6)); ?>
        <?php echo $form->error($model,'gender'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'birth_date'); ?>
        <?php echo $form->textField($model,'birth_date',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'birth_date'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'id_residence'); ?>
        <?php echo $form->textField($model,'id_residence',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'id_residence'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'created_at'); ?>
        <?php echo $form->textField($model,'created_at'); ?>
        <?php echo $form->error($model,'created_at'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'updated_at'); ?>
        <?php echo $form->textField($model,'updated_at'); ?>
        <?php echo $form->error($model,'updated_at'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->