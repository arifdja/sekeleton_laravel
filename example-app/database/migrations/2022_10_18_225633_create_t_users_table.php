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
        Schema::create('t_users', function (Blueprint $table) {
            $table->string('iduser',30);
            $table->char('jenisakun')->default('0');
            $table->string('namauser',200)->nullable();
            $table->string('nip',59)->nullable();
            $table->string('pangkat',300)->nullable();
            $table->string('golongan',300)->nullable();
            $table->string('jabatan',300)->nullable();
            $table->string('wordpass',96)->nullable();
            $table->string('idusergroup',300);
            $table->string('defaultusergroup',10);
            $table->char('kddept',3)->nullable();
            $table->char('kdunit',2)->nullable();
            $table->char('kdsatker',6)->nullable();
            $table->char('kdlokasi',2)->nullable();
            $table->string('notelp',60)->nullable();
            $table->string('email',300)->nullable();
            $table->integer('counter')->nullable()->default(0);
            $table->string('wordpassasli',15)->nullable()->default('NULL');
            $table->primary('iduser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_users');
    }
};
