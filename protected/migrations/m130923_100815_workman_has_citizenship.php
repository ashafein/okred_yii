<?php

class m130923_100815_workman_has_citizenship extends CDbMigration
{
    public function up()
    {
        $this->createTable('workman_has_citizenship', array(
                'id_workman' => 'INT UNSIGNED NOT NULL',
                'id_country' => 'INT UNSIGNED NOT NULL',
                'PRIMARY KEY (id_workman, id_country)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('workman_has_citizenship');
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