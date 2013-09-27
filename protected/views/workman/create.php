<?php
/* @var $this WorkmanController */
/* @var $model Workman */

$this->breadcrumbs=array(
	'Workmen'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Workman', 'url'=>array('index')),
	array('label'=>'Manage Workman', 'url'=>array('admin')),
);
?>

<h1>Create Workman</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>