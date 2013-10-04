<?php
/* @var $this WorkmanController */
/* @var $model Workman */

$this->breadcrumbs=array(
    'Workmen'=>array('index'),
    $model->id=>array('view','id'=>$model->id),
    'Update',
);

$this->menu=array(
    array('label'=>'List Workman', 'url'=>array('index')),
    array('label'=>'Create Workman', 'url'=>array('create')),
    array('label'=>'View Workman', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Manage Workman', 'url'=>array('admin')),
);
?>

    <h1>Update Workman <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>