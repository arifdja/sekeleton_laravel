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
        Schema::create('t_pengajuan_akses', function (Blueprint $table) {
            // $table->primary('id');
            $table->bigIncrements('id');
            $table->string('userid',200);
            $table->string('role',50);
            $table->string('kddept',3)->nullable($value = true);
            $table->string('kdunit',2)->nullable($value = true);
            $table->string('kdsatker',6)->nullable($value = true);
            $table->string('pdf_surat',200);
            $table->tinyInteger('status')->default(0);
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
        Schema::drop('t_pengajuan_akses');
    }
};
