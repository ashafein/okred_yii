<?php

class m130923_100758_workman_has_language extends CDbMigration
{
    public function up()
    {
        $this->createTable('workman_has_language', array(
                'id_workman' => 'INT UNSIGNED NOT NULL',
                'id_language' => 'INT UNSIGNED NOT NULL',
                'PRIMARY KEY (id_workman, id_language)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('workman_has_language');
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