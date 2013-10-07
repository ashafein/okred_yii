<?php
/* @var $this WorkmanController */
/* @var $model Workman */

$this->breadcrumbs=array(
	'Workmen'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Workman', 'url'=>array('index')),
	array('label'=>'Create Workman', 'url'=>array('create')),
	array('label'=>'Update Workman', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Workman', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Workman', 'url'=>array('admin')),
);
?>

<h1>View Workman #<?php echo $model->id; ?></h1>

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
