<?php
/* @var $this EmployerController */
/* @var $model Employer */

$this->breadcrumbs=array(
	'Employers'=>array('index'),
	$model->id_employer,
);

$this->menu=array(
	array('label'=>'List Employer', 'url'=>array('index')),
	array('label'=>'Create Employer', 'url'=>array('create')),
	array('label'=>'Update Employer', 'url'=>array('update', 'id'=>$model->id_employer)),
	array('label'=>'Delete Employer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_employer),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employer', 'url'=>array('admin')),
);
?>

<h1>View Employer #<?php echo $model->id_employer; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_employer',
		'email',
		'password',
		'fio',
		'id_parent',
		'id_role',
		'id_company',
		'id_city',
		'created_at',
		'updated_at',
	),
)); ?>
