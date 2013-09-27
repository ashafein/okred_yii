<?php
/* @var $this ResumeController */
/* @var $model Resume */

$this->breadcrumbs=array(
	'Resumes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Resume', 'url'=>array('index')),
	array('label'=>'Create Resume', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#resume-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Resumes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'resume-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_resume',
		'id_workman',
		'name',
		'avatar',
		'birth_date',
		'gender',
		/*
		'residence',
		'id_movement',
		'id_business_trip',
		'citizenship',
		'job_allow',
		'time_to_arrive',
		'mail',
		'phone',
		'position_wanted',
		'id_activity_sphere',
		'salary',
		'id_currency',
		'id_employment',
		'id_schedule',
		'additional_info',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
