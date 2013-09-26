<?php
/* @var $this VacancyController */
/* @var $data Vacancy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vacancy')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_vacancy), array('view', 'id'=>$data->id_vacancy)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_employer')); ?>:</b>
	<?php echo CHtml::encode($data->id_employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_region')); ?>:</b>
	<?php echo CHtml::encode($data->id_region); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_from')); ?>:</b>
	<?php echo CHtml::encode($data->salary_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_to')); ?>:</b>
	<?php echo CHtml::encode($data->salary_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_currency')); ?>:</b>
	<?php echo CHtml::encode($data->id_currency); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_expirience')); ?>:</b>
	<?php echo CHtml::encode($data->id_expirience); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_activity_sphere')); ?>:</b>
	<?php echo CHtml::encode($data->id_activity_sphere); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('functions')); ?>:</b>
	<?php echo CHtml::encode($data->functions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_education_lvl')); ?>:</b>
	<?php echo CHtml::encode($data->id_education_lvl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schedule')); ?>:</b>
	<?php echo CHtml::encode($data->schedule); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>