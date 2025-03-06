<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id(); // ID automatique
            $table->string('name'); // Nom du bien
            $table->text('description'); // Description du bien
            $table->decimal('price_per_night', 8, 2)->notNullable()->default(0.00);
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('properties');
    }
};
