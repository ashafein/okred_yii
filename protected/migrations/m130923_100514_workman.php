<?php

class m130923_100514_workman extends CDbMigration
{
    public function up()
    {
        $this->createTable('workman', array(
                'id_user' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'id_education_lvl'    => 'INT UNSIGNED',
                'CONSTRAINT email UNIQUE (id_user)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('workman');
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