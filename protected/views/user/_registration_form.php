<h1> <?php echo 'Registration'; ?> </h1>

<?php $this->breadcrumbs = array('Registration'); ?>

<div class="form">
    <?php $activeform = $this->beginWidget('CActiveForm', array(
                'id'=>'registration-form',
                'enableAjaxValidation'=>false,
                ));
    //var_dump($data); die();
    ?>
    <?php echo CHtml::errorSummary(array($data)); ?>

    <div class="row">
        <div class="span12">
            <?= $activeform->labelEx($data,'surname'); ?>
            <?= $activeform->textField($data,'surname'); ?>
        </div>
    </div>

    <div class="row">
        <div class="span12">
            <?= $activeform->labelEx($data,'name'); ?>
            <?= $activeform->textField($data,'name'); ?>
        </div>
    </div>

    <div class="row">
        <div class="span12">
            <?= $activeform->labelEx($data,'patronymic'); ?>
            <?= $activeform->textField($data,'patronymic'); ?>
        </div>
    </div>


    <div class="row">
        <div class="span12">
             <?= $activeform->labelEx($data,'email'); ?>
             <?= $activeform->textField($data,'email');?>
        </div>
    </div>

    <div class="row">
        <div class="span12">
             <?= $activeform->labelEx($data,'phone'); ?>
             <?= $activeform->textField($data,'phone');?>
        </div>
    </div>

    <div class="row">
        <div class="span12">
            <?= $activeform->labelEx($data,'password'); ?>
            <?= $activeform->passwordField($data,'password'); ?>
        </div>
    </div>

    <div class="row">
        <div class="span12">
            <?= $activeform->labelEx($data,'verifyPassword'); ?>
            <?= $activeform->passwordField($data,'verifyPassword'); ?>
        </div>
    </div>

    <div class="row">
        <div class="span12">
            <?= $activeform->labelEx($data,'userSelection'); ?>
            <?php echo $activeform->radioButtonList($data,'userSelection', array('workman'=>'Workman', 'employer' => 'Employer'));
            ?>
        </div>
    </div>


    <div class="row submit">
        <div class="span12">
            <?= CHtml::submitButton('Registration', array('class'=>'btn')); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
