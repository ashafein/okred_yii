<h1> <?php echo 'Registration'; ?> </h1>

<?php $this->breadcrumbs = array('Registration'); ?>

<div class="form">
<?php $activeform = $this->beginWidget('CActiveForm', array(
			'id'=>'registration-form',
			'enableAjaxValidation'=>false,
			));
//var_dump($data); die();
?>
<?php //echo CHtml::errorSummary(array($data)); ?>

<div class="row">
<div class="span12"> <?php
echo $activeform->labelEx($data['company'],'companylegaltype');
echo $activeform->textField($data['company'],'companylegaltype');
?> </div></div>

<div class="row">
<div class="span12"> <?php
echo $activeform->labelEx($data['company'],'companyname');
echo $activeform->textField($data['company'],'companyname');
?> </div></div>

<div class="row"><div class="span12"> <?php
echo $activeform->labelEx($data['employer'],'fio');
echo $activeform->textField($data['employer'],'fio');
?> </div></div>

<div class="row"><div class="span12"> <?php
echo $activeform->labelEx($data['employer'],'email');
echo $activeform->textField($data['employer'],'email');
?> </div></div>

<div class="row">
<div class="span12">
<?php echo $activeform->labelEx($data['employer'],'password'); ?>
<?php echo $activeform->passwordField($data['employer'],'password'); ?>
</div>
</div>

<div class="row">
<div class="span12">
<?php echo $activeform->labelEx($data['employer'],'verifyPassword'); ?>
<?php echo $activeform->passwordField($data['employer'],'verifyPassword'); ?>
</div></div>



	<div class="row submit">
    <div class="span12">
		<?php echo CHtml::submitButton('Registration', array('class'=>'btn')); ?>
        </div>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
