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
echo $activeform->labelEx($data['company'],'id_legal_type');
echo $activeform->textField($data['company'],'id_legal_type');
?> </div></div>

<div class="row">
<div class="span12"> <?php
echo $activeform->labelEx($data['company'],'name');
echo $activeform->textField($data['company'],'name');
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
