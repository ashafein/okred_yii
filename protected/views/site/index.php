<?php
/* @var $this SiteController */
if(!Yii::app()->user->isGuest) {
    echo 'user is in';
} elseif(Yii::app()->user->isGuest) {
    echo 'user is out';
}
$this->pageTitle=Yii::app()->name;
?>

Search form

