<?php

use App\Models\User;
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
            $table->id(); //auto increment, primarykey bigint tipusú
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => 'Nagy Pista',
            'email' => 'pisti45@gmail.com',
            'password' => 'vfzrfvvfuzcrv23'
        ]);

        User::create([
            'name' => 'Varga Ilona',
            'email' => 'ili.varga@gmail.com',
            'password' => 'vrfvg555vfcrv23'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
