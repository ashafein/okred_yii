<?php

class m130923_100001_region extends CDbMigration
{
    public function up()
    {
        $this->createTable('region', array(
               'id_region' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
               'id_country' => 'INT(8) unsigned NOT NULL',
               'region_name_ru' => 'varchar(255) NOT NULL',
               'region_name_en' => 'varchar(255) NOT NULL',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('region');
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