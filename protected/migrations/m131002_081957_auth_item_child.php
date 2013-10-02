<?php

class m131002_081957_auth_item_child extends CDbMigration
{
	public function up()
	{
        $this->createTable('auth_item_child', array(
         'parent_id' => 'INT UNSIGNED NOT NULL',
         'child_id' => 'INT UNSIGNED NOT NULL',
         'PRIMARY KEY (parent_id, child_id)',
        ),

        'ENGINE=InnoDB'
    );

	}

	public function down()
	{
        $this->dropTable('auth_item_child');

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