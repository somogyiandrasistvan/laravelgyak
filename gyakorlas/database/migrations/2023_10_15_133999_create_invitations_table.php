<?php

use App\Models\invitation;
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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id("invitation_id");
            $table->String("appeared");
            $table->foreignId('event_id')->references('event_id')->on('events');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        invitation::create([
            'appeared' => 'dfgdfgd',
            'event_id' => 1,
            'user_id' => 1
        ]);

        invitation::create([
            'appeared' => 'dfgdfdgd',
            'event_id' => 2,
            'user_id' => 2
        ]);

        invitation::create([
            'appeared' => 'dfgdfdgd',
            'event_id' => 3,
            'user_id' => 3
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
