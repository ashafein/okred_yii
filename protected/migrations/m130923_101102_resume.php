<?php

class m130923_101102_resume extends CDbMigration
{
  public function up()
    {
        $this->createTable('resume', array(
                'id_resume' => 'INT UNSIGNED ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'id_workman' => 'INT UNSIGNED NOT NULL',
                'name' => 'varchar(200)',
                'avatar' => 'BOOLEAN',
                'birth_date' => 'BOOLEAN',
                'gender' => 'BOOLEAN',
                'residence' => 'BOOLEAN',
                'id_movement' => 'INT UNSIGNED NOT NULL',
                'id_business_trip' => 'INT UNSIGNED NOT NULL',
                'citizenship' => 'BOOLEAN',
                'job_allow' => 'BOOLEAN',
                'time_to_arrive' => 'BOOLEAN',
                'mail' => 'BOOLEAN',
                'phone' => 'BOOLEAN',
                'position_wanted' => 'varchar(1024)',
                'id_activity_sphere' => 'INT UNSIGNED NOT NULL',
                'salary' => 'INT UNSIGNED',
                'id_currency' => 'INT UNSIGNED NOT NULL',
                'id_employment' => 'INT UNSIGNED NOT NULL',
                'id_schedule' => 'INT UNSIGNED NOT NULL',
                'additional_info' => 'varchar(1024)',
                'state' => 'varchar(20)',
                'created_at'=> 'DATETIME',
                'updated_at'=> 'DATETIME',
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