<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_buku');
            $table->string('nama_pengarang');
            $table->string('tahun_terbit');
            $table->string('penerbit');
            $table->integer('jumlah_halaman');
            $table->integer('jumlah_buku');
            $table->string('jenis_buku');
            $table->integer('kategori_id')->unsigned();
                $table->foreign('kategori_id')
                    ->references('id')
                    ->on('kategoris')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('file_ebook');
            $table->string('foto_cover');
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
        Schema::dropIfExists('bukus');
    }
}
