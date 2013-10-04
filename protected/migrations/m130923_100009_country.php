<?php

class m130923_100009_country extends CDbMigration
{
    public function up()
    {
        $this->createTable('country', array(
                'id_country' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'name_ru'    => 'varchar(200)',
                'name_en'   => 'varchar(200)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('country');
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