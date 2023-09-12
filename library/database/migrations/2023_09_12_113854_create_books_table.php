<?php

use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author', 32);
            $table->string('title', 150);
            $table->integer('pieces')->default(50);
            
            $table->timestamps();
        });

        Book::create([            
            'author' => 'Derek Landy',
            'title' => 'Skulduggery Pleasant',
            'pieces' => 70
        ]);

        Book::create([            
            'author' => 'Rick Riordan',
            'title' => 'The lightning thief',
            'pieces' => 57
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
