<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJumlahPenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumlah_penduduks', function (Blueprint $table) {
            $table->id();
            $table->integer("tahun");
            $table->integer("lk");
            $table->integer("pr");
            $table->integer("jumlah");
            $table->integer("jumlah_kk");
            $table->integer("laju_pertumbuhan");
            $table->integer("user_id");
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
        Schema::dropIfExists('jumlah_penduduks');
    }
}
