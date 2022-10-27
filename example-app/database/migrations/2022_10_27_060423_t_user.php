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
        Schema::create('t_user', function (Blueprint $table) {
            $table->primary('iduser');
            $table->string('iduser',30);
            $table->tinyInteger('jenisakun')->default(0);
            $table->string('namauser',200)->nullable($value = true);
            $table->string('nip',18);
            $table->string('pangkat',300);
            $table->string('golongan',300);
            $table->string('jabatan',300);
            $table->string('wordpass',100)->nullable($value = true);
            $table->string('idusergroup',300);
            $table->string('defaultusergroup',10);
            $table->string('kddept',3);
            $table->string('kdunit',2);
            $table->string('kdsatker',6);
            $table->string('kdlokasi',2);
            $table->string('notelp',20);
            $table->string('email',200);
            $table->tinyInteger('counter',0)->default(0);
            $table->string('wordpassasli',100)->nullable($value = true);
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
        Schema::drop('t_user');
    }
};
