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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname', 250)->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('uniqd', 50)->nullable()->unique(); // Asumimos que uniqd debe ser único si es un identificador
            $table->string('avatar', 250)->nullable();
            $table->string('fb', 250)->nullable(); // Podría ser una URL o ID de Facebook
            $table->string('address_city', 250)->nullable();
            $table->text('bio')->nullable();
            $table->string('sexo', 25)->nullable();
            $table->string('email')->unique();
            $table->tinyInteger('type_user')->unsigned()->default(1)->comment('1 es administrador y 2 cliente');
            $table->string('code_verified', 50)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
