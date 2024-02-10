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
        Schema::create('developermanagers', function (Blueprint $table) {
            $table->id('link_id');
            $table->unsignedBigInteger('developer_id');
            $table->unsignedBigInteger('manager_id');
            $table->timestamps();
            $table->foreign('developer_id')->references('developer_id')->on('developers');
            $table->foreign('manager_id')->references('manager_id')->on('managers');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developermanagers');
    }
};
