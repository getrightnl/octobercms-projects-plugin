<?php namespace GetRight\Projects\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('getright_projects_projects', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('title', 75);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('getright_projects_projects');
    }
}
