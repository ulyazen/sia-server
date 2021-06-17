<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahAktifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah_aktifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_dosen')->constrained('dosens');
            $table->foreignId('id_matkul')->constrained('matakuliahs');
            $table->char('kelas', 1);
            $table->string('tahun_ajar');
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
        Schema::dropIfExists('matakuliah_aktifs');
    }
}
