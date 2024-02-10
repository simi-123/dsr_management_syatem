<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
                $table->id('task_id');
                $table->unsignedBigInteger('cust_id');
                $table->foreign('cust_id')->references('id')->on('customers');
                $table->unsignedBigInteger('project_id');
                $table->foreign('project_id')->references('id')->on('projects');
                $table->unsignedBigInteger('module_id');
                $table->foreign('module_id')->references('id')->on('modules');
                $table->string('task_desc', 200);
                $table->string('task_detailed_understanding', 200);
                $table->unsignedBigInteger('assigned_to');
                $table->foreign('assigned_to')->references('id')->on('users');
                $table->decimal('expected_time_to_complete', 6, 2);
                $table->date('expected_start_date');
                $table->date('expected_completion_date');
                $table->unsignedBigInteger('any_pervious_task_refference');
                $table->foreign('any_pervious_task_refference')->references('task_id')->on('tasks');
                $table->date('actual_start_date');
                $table->date('actual_completion_date');
                $table->decimal('actual_time_taken', 6, 2);
                $table->string('resaon_for_delay', 200);
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            });
        }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
