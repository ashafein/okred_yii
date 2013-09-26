<?php

class m130923_100514_workman extends CDbMigration
{
    public function up()
    {
        $this->createTable('workman', array(
                'id_workman' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'email'    => 'varchar(200)',
                'phone'    => 'varchar(100)',
                'pssword'    => 'varchar(200)',
                'avatar'    => 'varchar(1024)',
                'fio'    => 'varchar(200)',
                'id_education_lvl'    => 'INT UNSIGNED',
                'gender'    => 'ENUM("male", "female", "none")',
                'birth_date'    => 'varchar(20)',
                'id_residence'    => 'INT UNSIGNED',
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