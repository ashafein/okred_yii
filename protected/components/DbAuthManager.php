<?php

class DbAuthManager extends CDbAuthManager{
    public function init(){
        // Иерархию ролей расположим в файле auth.php в директории config приложения
        parent::init();

    }

}