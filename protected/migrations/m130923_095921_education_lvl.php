<?php

class m130923_095921_education_lvl extends CDbMigration
{
    public function up()
    {
        $this->createTable('education_lvl', array(
                'id_education_lvl' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'education_lvl'    => 'varchar(200)',
                'visible' => 'BOOLEAN',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('education_lvl');
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