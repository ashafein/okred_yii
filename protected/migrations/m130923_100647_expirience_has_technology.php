<?php

class m130923_100647_expirience_has_technology extends CDbMigration
{
    public function up()
    {
        $this->createTable('expirience_has_technology', array(
                'id_expirience' => 'INT UNSIGNED NOT NULL',
                'id_technology' => 'INT UNSIGNED NOT NULL',
                'PRIMARY KEY (id_expirience, id_technology)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('expirience_has_technology');
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