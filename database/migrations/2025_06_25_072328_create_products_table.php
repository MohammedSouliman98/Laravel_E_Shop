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
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2); // e.g., 9999.99
            $table->string('images')->nullable(); // Store multiple image paths as JSON
            $table->string('category'); // e.g., "Men", "Women", "Kids"
            $table->string('size_options')->nullable(); // e.g., "S,M,L,XL"
            $table->integer('stock')->default(0);
            $table->boolean('trind')->default(false);
            $table->timestamps();
            $table->softDeletes(); // For soft deletion
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
