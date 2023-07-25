<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('id_chambre');
            $table->string('num_chambre');
            $table->string('num_etage');
            $table->string('nom_client');
            $table->string('prenom_client');
            $table->string('email_client');
            $table->string('telephone_client');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('heures');
            $table->string('demande');
            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
