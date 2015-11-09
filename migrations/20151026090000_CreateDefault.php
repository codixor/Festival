<?php

use Illuminate\Database\Schema\Blueprint;
use Phpmig\Migration\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class CreateDefault extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        Capsule::schema()->create('users', function (Blueprint $table) {
            $table->bigIncrements('seq');
            $table->string('name', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        Capsule::schema()->drop('users');
    }
}
