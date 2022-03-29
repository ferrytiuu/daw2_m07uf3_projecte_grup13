<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLloguersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lloguers', function (Blueprint $table) {
            $table->string('dniClient');
            $table->foreign('dniClient')->references('dni')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('codiApartament');
            $table->foreign('codiApartament')->references('codiApartament')->on('apartaments')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['dniClient','codiApartament']);
            $table->date('dataInici');
            $table->time('horaInici');
            $table->date('dataFinal');
            $table->time('horaFinal');
            $table->string('llocLliurament');
            $table->string('llocDevolucio');
            $table->float('preuDia');
            $table->string('diposit');
            $table->float('quantitatDiposit')->nullable();
            $table->string('tipusAsseguranca');
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
        Schema::dropIfExists('lloguers');
    }
}
