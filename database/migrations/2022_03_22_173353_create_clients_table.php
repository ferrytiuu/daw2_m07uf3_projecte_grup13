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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('dni');
            $table->primary('dni');
            $table->string('nomCognoms');
            $table->integer('edat');
            $table->integer('telefon');
            $table->string('adreca');
            $table->string('ciutat');
            $table->string('pais');
            $table->string('email');
            $table->char('tipusTargeta');
            $table->integer('numTargeta');
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
