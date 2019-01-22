<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProjectTasks', function (Blueprint $table) {
            $table->increments('projectTask_id');
            $table->unsignedInteger('task_id');
            $table->foreign('task_id')->references('task_id')->on('Tasks');
            $table->unsignedInteger('project_id');
            $table->foreign('project_id')->references('project_id')->on('Projects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projectTask');
    }
}
