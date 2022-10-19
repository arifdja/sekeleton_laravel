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
            $table->char('thang',4);
            $table->char('idmenu',6)->default('');
            $table->string('menu',30)->default('');
            $table->string('link',60)->default('');
            $table->char('icon',50)->default('');
            $table->integer('urutan',2)->default('0');
            $table->integer('aktif',1)->default('0');
            $table->primary(['thang','idmenu']);
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
