<?php

class m130923_100103_legal_type extends CDbMigration
{
    public function up()
    {
        $this->createTable('legal_type', array(
                'id_legal_type' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'legal_type'    => 'varchar(200)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('legal_type');
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