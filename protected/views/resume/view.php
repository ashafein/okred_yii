<?php
/* @var $this ResumeController */
/* @var $model Resume */

$this->breadcrumbs=array(
	'Resumes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Resume', 'url'=>array('index')),
	array('label'=>'Create Resume', 'url'=>array('create')),
	array('label'=>'Update Resume', 'url'=>array('update', 'id'=>$model->id_resume)),
	array('label'=>'Delete Resume', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_resume),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Resume', 'url'=>array('admin')),
);
?>

<h1>View Resume #<?php echo $model->id_resume; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_resume',
		'id_workman',
		'name',
		'avatar',
		'birth_date',
		'gender',
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
	),
)); ?>
