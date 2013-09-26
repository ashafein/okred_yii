<?php
/* @var $this VacancyController */
/* @var $model Vacancy */

$this->breadcrumbs=array(
	'Vacancies'=>array('index'),
	$model->name=>array('view','id'=>$model->id_vacancy),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vacancy', 'url'=>array('index')),
	array('label'=>'Create Vacancy', 'url'=>array('create')),
	array('label'=>'View Vacancy', 'url'=>array('view', 'id'=>$model->id_vacancy)),
	array('label'=>'Manage Vacancy', 'url'=>array('admin')),
);
?>

<h1>Update Vacancy <?php echo $model->id_vacancy; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>