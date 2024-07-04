<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('genre');
            $table->text('payload')->nullable();
            $table->date('date_de_naissance');
            $table->timestamp('date_inscription')->useCurrent();
            $table->timestamps();
        });

        // Insertion des données initiales
        DB::table('utilisateurs')->insert([
            'prenom' => 'Dassoah',
            'nom' => 'OKOUMOU',
            'genre' => 'H',
            'payload' => '3xFDw24GNmnJ2Gk65N2BBc7BS9LHM3c7r8V66Vmapjtk7z6t',
            'date_de_naissance' => '1995-02-03', // Format YYYY-MM-DD
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
