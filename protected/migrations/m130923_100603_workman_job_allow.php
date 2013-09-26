<?php

class m130923_100603_workman_job_allow extends CDbMigration
{
    public function up()
    {
        $this->createTable('workman_job_allow', array(
                'id_workman' => 'INT UNSIGNED NOT NULL',
                'id_country'    => 'INT UNSIGNED NOT NULL',
                'PRIMARY KEY (id_workman, id_country)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('workman_job_allow');
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