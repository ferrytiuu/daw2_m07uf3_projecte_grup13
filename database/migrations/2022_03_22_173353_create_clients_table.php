<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartaments', function (Blueprint $table) {
            $table->string('codiApartament');
            $table->primary('codiApartament');
            $table->string('refCatastral');
            $table->string('ciutat');
            $table->string('barri');
            $table->string('nomCarrer');
            $table->integer('numCarrer');
            $table->integer('pis');
            $table->integer('numLlits');
            $table->integer('numHabitacions');
            $table->boolean('ascensor');
            $table->char('calefaccio');
            $table->boolean('aireAcondicionat');
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
        Schema::dropIfExists('clients');
    }
}
