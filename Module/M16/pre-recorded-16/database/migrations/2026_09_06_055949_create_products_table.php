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
        Schema::create('products', function (Blueprint $table) {
            $table->id();


            // Product name
            $table->string('name');

            // Product description
            $table->longText('description')->nullable();



            // Product price
            $table->decimal('price', 10, 2);

            // Foreign Key
            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
