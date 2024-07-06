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
        Schema::create('docteurs', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('profession'); // Peut être généraliste, cardiologue, etc.
            $table->integer('duree_profession'); // Durée d'exercice en années
            $table->string('image'); // URL de l'image du médecin
            $table->timestamps();
        });

        // Insertion de données initiales
        $this->insertData();
    }

    private function insertData()
    {
        // Insertion de 50 lignes de données aléatoires
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) { // Correction apportée ici
            DB::table('docteurs')->insert([
                'prenom' => $faker->firstName,
                'nom' => $faker->lastName,
                'profession' => $faker->randomElement(['généraliste', 'cardiologue', 'dermatologue', 'chirurgien']),
                'duree_profession' => $faker->numberBetween(1, 40), // Durée professionnelle entre 1 et 40 ans
                'image' => $faker->imageUrl(200, 200, 'people', true, 'doctor'), // URL de l'image du médecin
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docteurs');
    }
};
