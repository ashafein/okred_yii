<?php
/* @var $this VacancyController */
/* @var $model Vacancy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vacancy-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_employer'); ?>
		<?php echo $form->textField($model,'id_employer',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_employer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_region'); ?>
		<?php echo $form->textField($model,'id_region',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_region'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_from'); ?>
		<?php echo $form->textField($model,'salary_from',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'salary_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_to'); ?>
		<?php echo $form->textField($model,'salary_to',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'salary_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_currency'); ?>
		<?php echo $form->textField($model,'id_currency',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_currency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_expirience'); ?>
		<?php echo $form->textField($model,'id_expirience',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_expirience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_activity_sphere'); ?>
		<?php echo $form->textField($model,'id_activity_sphere',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_activity_sphere'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'functions'); ?>
		<?php echo $form->textField($model,'functions',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'functions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_education_lvl'); ?>
		<?php echo $form->textField($model,'id_education_lvl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_education_lvl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'schedule'); ?>
		<?php echo $form->textField($model,'schedule',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'schedule'); ?>
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