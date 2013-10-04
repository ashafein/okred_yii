<?php

class m130923_100514_workman extends CDbMigration
{
    public function up()
    {
        $this->createTable('workman', array(
                'id' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'email'    => 'varchar(200)',
                'phone'    => 'varchar(100)',
                'password'    => 'varchar(200)',
                'avatar'    => 'varchar(1024)',
                'fio'    => 'varchar(200)',
                'id_state' => 'INT UNSIGNED NOT NULL',
                'id_role' => 'INT UNSIGNED NOT NULL',
                'id_education_lvl'    => 'INT UNSIGNED',
                'gender'    => 'ENUM("male", "female", "none")',
                'birth_date'    => 'varchar(20)',
                'id_residence'    => 'INT UNSIGNED',
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