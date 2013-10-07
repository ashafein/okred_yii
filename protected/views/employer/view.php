<?php
/* @var $this EmployerController */
/* @var $model Employer */

$this->breadcrumbs=array(
	'Employers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Employer', 'url'=>array('index')),
	array('label'=>'Create Employer', 'url'=>array('create')),
	array('label'=>'Update Employer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Employer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employer', 'url'=>array('admin')),
);
?>

<h1>View Employer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'phone',
		'password',
		'avatar',
		'name',
		'surname',
		'patronymic',
		'role',
		'gender',
		'birth_date',
		'id_country',
		'id_city',
		'state',
		'last_visited_at',
		'created_at',
		'updated_at',
	),
)); ?>
