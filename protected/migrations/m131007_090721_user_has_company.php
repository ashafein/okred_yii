<?php

class m131007_090721_user_has_company extends CDbMigration
{
    public function up()
    {
        $this->createTable('user_has_company', array(
                'id_user' => 'INT UNSIGNED NOT NULL',
                'id_company' => 'INT UNSIGNED NOT NULL',
                'PRIMARY KEY (id_user, id_company)',
            ),
            'ENGINE=InnoDB'
        );

    }

	public function down()
	{
        $this->dropTable('user_has_company');

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