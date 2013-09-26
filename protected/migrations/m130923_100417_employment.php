<?php

class m130923_100417_employment extends CDbMigration
{
    public function up()
    {
        $this->createTable('employment', array(
                'id_employment' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'employment'    => 'varchar(200)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('employment');
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