<?php

class m130923_100227_activity_sphere extends CDbMigration
{
    public function up()
    {
        $this->createTable('activity_sphere', array(
                'id_activity_sphere' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'activity_sphere'    => 'varchar(200)',
            ),
            'ENGINE=InnoDB'
        );

    }



    public function down()
    {
        $this->dropTable('activity_sphere');
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