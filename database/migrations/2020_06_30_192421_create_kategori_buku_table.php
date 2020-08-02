<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_buku', function (Blueprint $table) {
            //create table kategori_buku
            $table->integer('id_buku')->unsigned()->index();
            $table->integer('id_kategori')->unsigned()->index();

            $table->timestamps();

            //set FK kategori_buku -- buku
            $table->foreign('id_buku')
                ->references('id')
                ->on('buku')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //set fk kategori_buku -- kategori
            $table->foreign('id_kategori')
                ->references('id')
                ->on('kategori')
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
        Schema::dropIfExists('kategori_buku');
    }
}
