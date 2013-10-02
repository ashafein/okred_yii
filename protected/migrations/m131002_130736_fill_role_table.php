<?php

class m131002_130736_fill_role_table extends CDbMigration
{
	public function up()
	{ $this->insert('role', array('role' => 'admin'));
      $this->insert('role', array('role' => 'admin_employer'));
      $this->insert('role', array('role' => 'child_employer'));
      $this->insert('role', array('role' => 'workman'));
      $this->insert('role', array('role' => 'guest'));
	}

	public function down()
	{

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