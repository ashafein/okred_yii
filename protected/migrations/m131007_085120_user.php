<?php

class m131007_085120_user extends CDbMigration
{
    public function up()
    {
        $this->createTable('user', array(
                'id' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'email'    => 'varchar(200)',
                'phone'    => 'varchar(100)',
                'password'    => 'varchar(200)',
                'avatar'    => 'varchar(1024)',
                'name'    => 'varchar(200)',
                'surname' => 'varchar(200)',
                'patronymic' => 'varchar(200)',
                'role' => 'INT UNSIGNED NOT NULL',
                'gender'    => 'ENUM("male", "female", "none")',
                'birth_date'    => 'varchar(20)',
                'id_country'    => 'INT UNSIGNED',
                'id_city'    => 'INT UNSIGNED',
                'state' => 'varchar(20)',
                'last_visited_at' => 'DATETIME',
                'created_at'=> 'DATETIME',
                'updated_at'=> 'DATETIME',
                'CONSTRAINT email UNIQUE (email)',
                'CONSTRAINT phone UNIQUE (phone)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('user');
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