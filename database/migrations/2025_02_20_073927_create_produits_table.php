<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id(); // id auto-increment (big integer)
            $table->string('nom'); // Nom du produit
            $table->text('description'); // Description du produit
            $table->double('prix', 8, 2); // Prix du produit avec 2 décimales
            $table->timestamps(); // created_at et updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
