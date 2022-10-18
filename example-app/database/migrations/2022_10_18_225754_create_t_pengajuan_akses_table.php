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
            $table->id('id');
            $table->string('userid');
            $table->string('role');
            $table->string('kddept');
            $table->string('kdunit')->nullable();
            $table->string('kdsatker')->nullable();
            $table->string('pdf_surat');
            $table->string('status',[0,1])->default(0);
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
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
        Schema::dropIfExists('t_pengajuan_akses');
    }
};
