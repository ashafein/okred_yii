<?php

class m130923_100051_company_type extends CDbMigration
{
    public function up()
    {
        $this->createTable('company_type', array(
                'id_company_type' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'company_type'    => 'varchar(200)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('company_type');
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