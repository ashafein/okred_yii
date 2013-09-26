<?php

class m130923_100333_time_to_arrive extends CDbMigration
{
    public function up()
    {
        $this->createTable('time_to_arrive', array(
                'id_time_to_arrive' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'time_to_arrive'    => 'varchar(200)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('time_to_arrive');
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