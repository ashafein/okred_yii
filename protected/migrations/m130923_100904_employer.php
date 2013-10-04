<?php

class m130923_100904_employer extends CDbMigration
{
    public function up()
    {
        $this->createTable('employer', array(
                'id' => 'INT UNSIGNED ZEROFILL NOT NULL  PRIMARY KEY AUTO_INCREMENT',
                'email' => 'varchar(45) NOT NULL',
                'password' => 'VARCHAR(45) NOT NULL',
                'fio' => 'VARCHAR(45)',
                'id_parent' => 'INT UNSIGNED',
                'id_state' => 'INT UNSIGNED NOT NULL',
                'id_company' => 'INT UNSIGNED',
                'id_city' => 'INT UNSIGNED',
                'id_role' => 'INT UNSIGNED NOT NULL',
                'state' => 'varchar(20)',
                'last_visited_at' => 'DATETIME',
                'created_at'=> 'DATETIME',
                'updated_at'=> 'DATETIME',
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