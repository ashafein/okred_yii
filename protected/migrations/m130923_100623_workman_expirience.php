<?php

class m130923_100623_workman_expirience extends CDbMigration
{
    public function up()
    {
        $this->createTable('workman_expirience', array(
                'id_expirience' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'id_workman' => 'INT UNSIGNED NOT NULL',
                'company_name' => 'varchar(300) NOT NULL',
                'id_city' => 'INT UNSIGNED NOT NULL',
                'website' => 'varchar(1024)',
                'id_activity_sphere' => 'INT UNSIGNED NOT NULL',
                'position' => 'varchar(500)',
                'start_date' => 'DATETIME',
                'end_date' => 'DATETIME',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('workman_expirience');
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