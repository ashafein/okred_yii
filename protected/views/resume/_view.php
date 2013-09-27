<?php
/* @var $this ResumeController */
/* @var $data Resume */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_resume')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_resume), array('view', 'id'=>$data->id_resume)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_workman')); ?>:</b>
	<?php echo CHtml::encode($data->id_workman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar')); ?>:</b>
	<?php echo CHtml::encode($data->avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_date')); ?>:</b>
	<?php echo CHtml::encode($data->birth_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('residence')); ?>:</b>
	<?php echo CHtml::encode($data->residence); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_movement')); ?>:</b>
	<?php echo CHtml::encode($data->id_movement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_business_trip')); ?>:</b>
	<?php echo CHtml::encode($data->id_business_trip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('citizenship')); ?>:</b>
	<?php echo CHtml::encode($data->citizenship); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_allow')); ?>:</b>
	<?php echo CHtml::encode($data->job_allow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_to_arrive')); ?>:</b>
	<?php echo CHtml::encode($data->time_to_arrive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_wanted')); ?>:</b>
	<?php echo CHtml::encode($data->position_wanted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_activity_sphere')); ?>:</b>
	<?php echo CHtml::encode($data->id_activity_sphere); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary')); ?>:</b>
	<?php echo CHtml::encode($data->salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_currency')); ?>:</b>
	<?php echo CHtml::encode($data->id_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_employment')); ?>:</b>
	<?php echo CHtml::encode($data->id_employment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_schedule')); ?>:</b>
	<?php echo CHtml::encode($data->id_schedule); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_info')); ?>:</b>
	<?php echo CHtml::encode($data->additional_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>