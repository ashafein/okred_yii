<?php
/* @var $this WorkmanController */
/* @var $model Workman */

$this->breadcrumbs=array(
    'Workmen'=>array('index'),
    $model->id,
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
        'fio',
        'id_education_lvl',
        'gender',
        'birth_date',
        'id_residence',
        'created_at',
        'updated_at',
    ),
)); ?>
