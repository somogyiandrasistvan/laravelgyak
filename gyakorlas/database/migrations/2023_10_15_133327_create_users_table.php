<?php

use App\Models\users;
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
            $table->id("id");
            $table->String("name");
            $table->String("email");
            $table->integer("sex");
            $table->foreignId("id")->references("user_id")->on("invitation");
            $table->timestamps();
        });

        users::create([
            'name' => 'sajt',
            'email' => 'sajt@gmail.com',
            'sex' => 0,
        ]);
        users::create([
            'name' => 'sajt2',
            'email' => 'sajt2@gmail.com',
            'sex' => 1,
        ]);
        users::create([
            'name' => 'sajt3',
            'email' => 'sajt3@gmail.com',
            'sex' => 0,
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
