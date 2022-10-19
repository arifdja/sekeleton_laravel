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
            $table->increments('id');
            $table->string('userid',100);
            $table->string('role',50);
            $table->char('kddept',3)->nullable()->default('NULL');
            $table->char('kdunit',2)->nullable()->default('NULL');
            $table->char('kdsatker',6)->nullable()->default('NULL');
            $table->string('pdf_surat',200);
            $table->tinyInteger('status',1)->default('0');
            $table->datetime('created_at');
            $table->datetime('updated_at')->nullable()->default('NULL');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pengajuan_akses');
    }
};
