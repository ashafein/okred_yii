<?php
/* @var $this ResumeController */
/* @var $model Resume */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_resume'); ?>
		<?php echo $form->textField($model,'id_resume',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_workman'); ?>
		<?php echo $form->textField($model,'id_workman',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'residence'); ?>
		<?php echo $form->textField($model,'residence'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_movement'); ?>
		<?php echo $form->textField($model,'id_movement',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_business_trip'); ?>
		<?php echo $form->textField($model,'id_business_trip',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'citizenship'); ?>
		<?php echo $form->textField($model,'citizenship'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_allow'); ?>
		<?php echo $form->textField($model,'job_allow'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_to_arrive'); ?>
		<?php echo $form->textField($model,'time_to_arrive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mail'); ?>
		<?php echo $form->textField($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position_wanted'); ?>
		<?php echo $form->textField($model,'position_wanted',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_activity_sphere'); ?>
		<?php echo $form->textField($model,'id_activity_sphere',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary'); ?>
		<?php echo $form->textField($model,'salary',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_currency'); ?>
		<?php echo $form->textField($model,'id_currency',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_employment'); ?>
		<?php echo $form->textField($model,'id_employment',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_schedule'); ?>
		<?php echo $form->textField($model,'id_schedule',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_info'); ?>
		<?php echo $form->textField($model,'additional_info',array('size'=>60,'maxlength'=>1024)); ?>
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