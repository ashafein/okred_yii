<?php

class DbAuthManager extends CDbAuthManager{
    public function init(){
        // Иерархию ролей расположим в файле auth.php в директории config приложения
        parent::init();

    }

        public function assignwithtype($itemName,$userId,$usertype,$bizRule=null,$data=null)
        {
            if($this->usingSqlite() && $this->getAuthItem($itemName)===null)
                throw new CException(Yii::t('yii','The item "{name}" does not exist.',array('{name}'=>$itemName)));

            $this->db->createCommand()
                ->insert($this->assignmentTable, array(
                    'itemname'=>$itemName,
                    'userid'=>$userId,
                    'usertype'=>$usertype,
                    'bizrule'=>$bizRule,
                    'data'=>serialize($data)
                ));
            return new CAuthAssignment($this,$itemName,$userId,$bizRule,$data);
        }

}