<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerbitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerbit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_penerbit', 30);

            $table->timestamps();
        });

        //set FK di kolom id_penerbit di tabel siswa
        Schema::table ('buku', function (Blueprint $table){
            $table->foreign('id_penerbit')
                ->references('id')
                ->on('penerbit')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop fk di kolom id_kelas di tabel siswa
        Schema::table('buku', function (Blueprint $table){
            $table->dropForeign('buku_id_penerbit_foreign');
        });

        Schema::dropIfExists('penerbit');
    }
}
