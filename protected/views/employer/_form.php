<?php
/* @var $this EmployerController */
/* @var $model Employer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'fio'); ?>
        <?php echo $form->textField($model,'fio',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'fio'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'Repeat Password'); ?>
        <?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <?php if (!Yii::app()->user->isGuest) : ?>
        <div class="row">
            <?php echo $form->labelEx($model,'id_role'); ?>
            <?php echo $form->textField($model,'id_role',array('size'=>10,'maxlength'=>10)); ?>
            <?php echo $form->error($model,'id_role'); ?>
        </div>
    <?php EndIf; ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_city'); ?>
		<?php echo $form->textField($model,'id_city',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_city'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->