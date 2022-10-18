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
        Schema::create('t_user_groups', function (Blueprint $table) {
            $table->id('ídusergroup');
            $table->string('nmusergroup')->nullable();
            $table->string('menu')->nullable();
            $table->string('kwdept')->nullable();
            $table->string('kwunit')->nullable();
            $table->string('kwlokasi')->nullable();
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
        Schema::dropIfExists('t_user_groups');
    }
};
