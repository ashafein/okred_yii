<?php
/* @var $this EmployerController */
/* @var $model Employer */

$this->breadcrumbs=array(
	'Employers'=>array('index'),
	$model->id_employer=>array('view','id'=>$model->id_employer),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employer', 'url'=>array('index')),
	array('label'=>'Create Employer', 'url'=>array('create')),
	array('label'=>'View Employer', 'url'=>array('view', 'id'=>$model->id_employer)),
	array('label'=>'Manage Employer', 'url'=>array('admin')),
);
?>

<h1>Update Employer <?php echo $model->id_employer; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>