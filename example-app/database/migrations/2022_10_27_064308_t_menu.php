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
        Schema::create('t_menu', function (Blueprint $table) {
            $table->primary(['thang', 'idmenu']);
            $table->string('thang',4);
            $table->string('idmenu',6);
            $table->string('menu',30);
            $table->string('link',60);
            $table->string('icon',50)->nullable($value = true);
            $table->integer('urutan');
            $table->tinyInteger('aktif')->default(0);
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
        Schema::drop('t_menu');
    }
};
