<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', ['default' => null, 'limit' => 255, 'null' => false])
        	  ->addColumn('email', 'string', ['default' => null, 'limit' => 255, 'null' => false])
              ->addColumn('password', 'string', ['default' => null, 'limit' => 255, 'null' => false])
              ->addColumn('lastLogin', 'datetime', ['default' => null, 'null' => true])
              ->addColumn('created', 'datetime', ['default' => null, 'null' => false])
              ->addColumn('modified', 'datetime', ['default' => null, 'null' => false])
              ->addIndex(['email'], ['name' => 'UNIQUE_EMAIL', 'unique' => true])
              ->create();
    }
}