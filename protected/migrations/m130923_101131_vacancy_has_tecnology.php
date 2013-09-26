<?php

class m130923_101131_vacancy_has_tecnology extends CDbMigration
{
    public function up()
    {
        $this->createTable('vacancy_has_technology', array(
                'id_vacancy' => 'INT UNSIGNED NOT NULL',
                'id_technology' => 'INT UNSIGNED NOT NULL',
                'PRIMARY KEY (id_vacancy, id_technology)',
            ),

            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('vacancy_has_technology');
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