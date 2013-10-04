<?php
/* @var $this EmployerController */
/* @var $data Employer */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
    <?php echo CHtml::encode($data->password); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('fio')); ?>:</b>
    <?php echo CHtml::encode($data->fio); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('id_parent')); ?>:</b>
    <?php echo CHtml::encode($data->id_parent); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
    <?php echo CHtml::encode($data->role); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('id_company')); ?>:</b>
    <?php echo CHtml::encode($data->id_company); ?>
    <br />

    <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_city')); ?>:</b>
	<?php echo CHtml::encode($data->id_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>