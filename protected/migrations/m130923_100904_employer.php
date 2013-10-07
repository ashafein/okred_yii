<?php

class m130923_100904_employer extends CDbMigration
{
    public function up()
    {
        $this->createTable('employer', array(
                'id_user' => 'INT UNSIGNED ZEROFILL NOT NULL  PRIMARY KEY AUTO_INCREMENT',
                'id_parent' => 'INT UNSIGNED',

                'CONSTRAINT id_user UNIQUE (id_user)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('employer');
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