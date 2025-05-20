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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->text('icon')->nullable();
            $table->tinyInteger('state')->unsigned()->default(1)->comment('1 es activo y 2 es inactivo');
            $table->string('imagen', 250)->nullable();
            $table->unsignedBigInteger('categorie_second_id')->nullable();
            $table->unsignedBigInteger('categorie_third_id')->nullable();
            $table->double('position')->unsigned()->default(1);
            $table->tinyInteger('type_categorie')->unsigned()->default(1)->comment('1 es departamento, 2 categoria y 3 subcategoria');
            $table->timestamps();
            $table->softDeletes();

            // Foreign keys - Self-referencing
            // It's generally safer to add these in a separate Schema::table call after table creation
            // or ensure this migration runs after the 'categories' table structure is fully defined if created in parts.
            // However, for a single create block, this should work assuming the table name 'categories' is resolvable.
        });

        // Add foreign keys in a separate block to ensure the table exists.
        Schema::table('categories', function (Blueprint $table) {
            $table->foreign('categorie_second_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('categorie_third_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign(['categorie_second_id']);
            $table->dropForeign(['categorie_third_id']);
        });
        Schema::dropIfExists('categories');
    }
}; 