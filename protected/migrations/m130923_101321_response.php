<?php

class m130923_101321_response extends CDbMigration
{
    public function up()
    {
        $this->createTable('response', array(
                'id_vacancy' => 'INT UNSIGNED NOT NULL',
                'id_resume'    => 'INT UNSIGNED NOT NULL',
                'id_employer'    => 'INT UNSIGNED NOT NULL',
                'id_workman'    => 'INT UNSIGNED NOT NULL',
                'approved_by_employer'    => 'BOOLEAN',
                'approved_by_workman'    => 'BOOLEAN',
                'deleted_by_employer'    => 'BOOLEAN',
                'deleted_by_workman'    => 'BOOLEAN',
                'delayed_by_employer'    => 'BOOLEAN',
                'rejected_by_employer'    => 'BOOLEAN',
                'created_at'=> 'DATETIME',
                'updated_at'=> 'DATETIME',
                'PRIMARY KEY (id_vacancy, id_resume)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('response');
    }

    /*
    // Use safeUp/safeDown to do migration with transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}