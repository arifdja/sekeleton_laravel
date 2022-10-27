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
        Schema::create('t_user_group', function (Blueprint $table) {
            $table->primary('idusergroup');
            $table->string('idusergroup',35);
            $table->string('nmusergroup',100);
            $table->string('menu',500);
            $table->string('kwdept',200);
            $table->string('kwunit',200);
            $table->string('kwsatker',200);
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
        Schema::drop('t_user_group');
    }
};
