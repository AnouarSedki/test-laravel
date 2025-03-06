<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // ID automatique
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Utilisateur qui a fait la réservation
            $table->foreignId('property_id')->constrained()->onDelete('cascade'); // Bien réservé
            $table->date('start_date'); // Date de début de la réservation
            $table->date('end_date'); // Date de fin de la réservation
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
