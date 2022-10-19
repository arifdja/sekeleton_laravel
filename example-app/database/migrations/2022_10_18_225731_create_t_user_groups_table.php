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
            $table->string('idusergroup',35)->default('');
            $table->string('nmusergroup',100)->default('');
            $table->text('menu')->nullable()->default('NULL');
            $table->string('kwdept',200)->default('');
            $table->string('kwunit',200)->default('');
            $table->string('kwlokasi',200)->default('');
            $table->primary('idusergroup');
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
