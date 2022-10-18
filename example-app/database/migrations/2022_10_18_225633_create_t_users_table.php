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
            $table->id('iduser');
            $table->string('jenisakun',[0,1])->default(0);
            $table->string('namauser')->nullable();
            $table->string('nip')->nullable();
            $table->string('pangkat')->nullable();
            $table->string('golongan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('wordpass')->nullable();
            $table->string('idusergroup')->nullable();
            $table->string('defaultusergroup');
            $table->string('kddept')->nullable();
            $table->string('kdunit')->nullable();
            $table->string('kdsatker')->nullable();
            $table->string('kdlokasi')->nullable();
            $table->string('notelp')->nullable();
            $table->string('email')->nullable();
            $table->string('counter',[0,1])->default(0);
            $table->string('wordpassasli')->nullable();
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
        Schema::dropIfExists('t_users');
    }
};
