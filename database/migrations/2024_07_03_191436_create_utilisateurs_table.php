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
            'prenom' => 'John',
            'nom' => 'Doe',
            'genre' => 'H',
            'payload' => 'eyJhbGciOiJlUzl1NilsInR5cCl6lkpXVCJ9.eyJzdWliOilxMjMONTY3ODkwliwibmFtZSl6lkpvaG4gRG9lliwiZW1haWwiOiJqb2huLmRvZUBlc3RpYWOuY29tliwiaWFOljoxNTE2MjM5MDlyLCJleHAiOjE3Mjc3NDA3OTksInJvbGUiOiJlbXBsb3lIZSJ9.CzHm8hILNQOnakPR-EMVwXlorMM0eUW15yxJCFICtXc',
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
