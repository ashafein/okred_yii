<?php

class m130923_100504_company extends CDbMigration
{
    public function up()
    {
        $this->createTable('company', array(
                'id_company' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'id_employer' => 'INT UNSIGNED',
                'name' => 'varchar(200)',
                'id_company_type' => 'INT UNSIGNED',
                'id_legal_type' => 'INT UNSIGNED',
                'staff' => 'INT UNSIGNED',
                'description' => 'varchar(1024)',
                'logo' => 'varchar(1024)',
                'slogan' => 'varchar(1024)',
                'phone' => 'varchar(100)',
                'website' => 'varchar(1024)',
                'id_city' => 'INT UNSIGNED',
                'created_at'=> 'DATETIME',
                'updated_at'=> 'DATETIME',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('company');
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