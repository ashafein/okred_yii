<?php

class m130923_100958_vacancy extends CDbMigration
{
    public function up()
    {
        $this->createTable('vacancy', array(
                'id_vacancy' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'id_employer' => 'INT UNSIGNED NOT NULL',
                'name' => 'varchar(200) NOT NULL',
                'id_region' => 'INT UNSIGNED NOT NULL',
                'salary_from' => 'INT UNSIGNED',
                'salary_to' => 'INT UNSIGNED',
                'id_currency' => 'INT UNSIGNED',
                'id_expirience' => 'INT UNSIGNED',
                'description' => 'varchar(1024)',
                'address' => 'varchar(500)',
                'id_activity_sphere' => 'INT UNSIGNED',
                'functions' => 'varchar(500)',
                'id_education_lvl' => 'INT UNSIGNED',
                'schedule' => 'varchar(500)',
                'state' => 'varchar(20)',
                'created_at'=> 'DATETIME',
                'updated_at'=> 'DATETIME',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('vacancy');
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