<?php

class m130923_101656_portfolio extends CDbMigration
{
    public function up()
    {
        $this->createTable('portfolio', array(
                'id_portfolio' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'id_workman'    => 'INT UNSIGNED NOT NULL',
                'file_name' => 'varchar(1024)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('portfolio');
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