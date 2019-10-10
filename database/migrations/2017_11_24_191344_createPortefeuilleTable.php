<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createPortefeuilleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portefeuille', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('dateOrdre', 50);
            $table->string('datePrevue', 30);
            $table->string('dateLivraison', 40);
            $table->integer('idClient')->references('id')->on('clients');
            $table->integer('assurance');
            $table->integer('idCredit')->references('id')->on('typeCredit');
            $table->integer('idOrganisme')->references('id')->on('organismes');
            $table->integer('amount_given');
            $table->integer('amount_eligible');
            $table->string('dateReceived', 20)->nullable();
            $table->string('datePaid', 20)->nullable();
            $table->string('solde', 10)->nullable();
            $table->string('dateSolde', 20)->nullable();
            $table->boolean('approved')->default(false);
            $table->string('idDossier', 30);
            $table->boolean('gcapp')->default(false);
            $table->boolean('dipe')->default(false);
            $table->boolean('ent')->default(false);
            $table->boolean('aut')->default(false);

            // 0 = None; 1 = VN; 0 = VO
            $table->integer('vnvo')->default(0);
            $table->text('comment')->nullable();
            $table->boolean('status')->default(0);
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portefeuille');
    }
}
