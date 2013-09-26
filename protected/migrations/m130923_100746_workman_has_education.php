<?php

class m130923_100746_workman_has_education extends CDbMigration
{
    public function up()
    {
        $this->createTable('workman_has_education', array(
                'id_workman_has_education' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'id_workman' => 'INT UNSIGNED NOT NULL',
                'institute' => 'varchar(300) NOT NULL',
                'faculty' => 'varchar(1024) NOT NULL',
                'speciality' => 'varchar(1024) NOT NULL',
                'graduated_at' => 'YEAR',
                'certificate' => 'varchar(1024)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('workman_has_education');
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