<?php
/* @var $this SiteController */
if(!Yii::app()->user->isGuest) {
    echo Yii::app()->user->id;
} elseif(Yii::app()->user->isGuest) {
    echo 'user is out';
}
$this->pageTitle=Yii::app()->name;
?>

Search form

