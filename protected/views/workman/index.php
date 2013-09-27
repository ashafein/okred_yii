<?php
/* @var $this WorkmanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Workmen',
);

$this->menu=array(
	array('label'=>'Create Workman', 'url'=>array('create')),
	array('label'=>'Manage Workman', 'url'=>array('admin')),
);
?>

<h1>Workmen</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
