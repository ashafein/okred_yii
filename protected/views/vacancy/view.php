<?php
/* @var $this VacancyController */
/* @var $model Vacancy */

$this->breadcrumbs=array(
	'Vacancies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Vacancy', 'url'=>array('index')),
	array('label'=>'Create Vacancy', 'url'=>array('create')),
	array('label'=>'Update Vacancy', 'url'=>array('update', 'id'=>$model->id_vacancy)),
	array('label'=>'Delete Vacancy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vacancy),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vacancy', 'url'=>array('admin')),
);
?>

<h1>View Vacancy #<?php echo $model->id_vacancy; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_vacancy',
		'id_employer',
		'name',
		'id_region',
		'salary_from',
		'salary_to',
		'id_currency',
		'id_expirience',
		'description',
		'address',
		'id_activity_sphere',
		'functions',
		'id_education_lvl',
		'schedule',
		'created_at',
		'updated_at',
	),
)); ?>
