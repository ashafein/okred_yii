<?php
/* @var $this ResumeController */
/* @var $model Resume */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'resume-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_workman'); ?>
		<?php echo $form->textField($model,'id_workman',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_workman'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar'); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
		<?php echo $form->error($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'residence'); ?>
		<?php echo $form->textField($model,'residence'); ?>
		<?php echo $form->error($model,'residence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_movement'); ?>
		<?php echo $form->textField($model,'id_movement',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_movement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_business_trip'); ?>
		<?php echo $form->textField($model,'id_business_trip',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_business_trip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citizenship'); ?>
		<?php echo $form->textField($model,'citizenship'); ?>
		<?php echo $form->error($model,'citizenship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_allow'); ?>
		<?php echo $form->textField($model,'job_allow'); ?>
		<?php echo $form->error($model,'job_allow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_to_arrive'); ?>
		<?php echo $form->textField($model,'time_to_arrive'); ?>
		<?php echo $form->error($model,'time_to_arrive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail'); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position_wanted'); ?>
		<?php echo $form->textField($model,'position_wanted',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'position_wanted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_activity_sphere'); ?>
		<?php echo $form->textField($model,'id_activity_sphere',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_activity_sphere'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary'); ?>
		<?php echo $form->textField($model,'salary',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_currency'); ?>
		<?php echo $form->textField($model,'id_currency',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_currency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_employment'); ?>
		<?php echo $form->textField($model,'id_employment',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_employment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_schedule'); ?>
		<?php echo $form->textField($model,'id_schedule',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id_schedule'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'additional_info'); ?>
		<?php echo $form->textField($model,'additional_info',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'additional_info'); ?>
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