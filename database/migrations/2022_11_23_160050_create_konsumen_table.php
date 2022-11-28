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
        Schema::create('pesertadidik', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('nis', 10)->unique();
            $table->string('jk', 1);
            $table->string('kelas', 19);
            $table->string('alamat', 19);
            $table->string('satatus', 19);
            // $table->unsignedBIgInteger('class_id');
            //$table->foreign('class_id')->references('id')
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
        Schema::dropIfExists('pesertadidik');
    }
};
