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
        Schema::create('t_menus', function (Blueprint $table) {
            $table->unique( array('idmenu','thang') );
            $table->id('idmenu');
            $table->string('thang')->nullable();
            $table->string('menu')->nullable();
            $table->string('link')->nullable();
            $table->string('icon')->nullable();
            $table->string('urutan')->nullable();
            $table->string('aktif',[0,1])->default(0);
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
        Schema::dropIfExists('t_menus');
    }
};
