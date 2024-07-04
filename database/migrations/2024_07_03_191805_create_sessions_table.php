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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->boolean('est_utilise')->default(false);
            $table->text('payload')->nullable();
            $table->foreignId('utilisateur_id')->nullable()->constrained('utilisateurs');
            $table->timestamp('date_creation')->useCurrent();
            $table->timestamps();
        });

        $code = mt_rand(10000, 99999);

        // Insertion des données initiales avec code aléatoire à 5 chiffres
        DB::table('sessions')->insert([
            'code' => mt_rand(10000, 99999),
            'est_utilise' => false,
            'payload' => null,
            'utilisateur_id' => 1, // ID de l'utilisateur désiré
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
