<?php

class m130923_100015_city extends CDbMigration
{
    public function up()
    {
        $this->createTable('city', array(
                'id_city' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'city'    => 'varchar(200)',
                'id_country' => 'INT UNSIGNED NOT NULL',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('city');
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