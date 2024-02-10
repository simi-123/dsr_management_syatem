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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('submodule_id');
            $table->integer('insert')->default(0);
            $table->integer('update')->default(0);
            $table->integer('delete')->default(0);
            $table->integer('view')->default(0);
            $table->integer('created_by');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('submodule_id')->references('id')->on('submodules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
};
