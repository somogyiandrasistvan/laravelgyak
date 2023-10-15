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
            $table->id("event_id");
            $table->id("user_id");
            $table->foreignId('event_id')->references('event_id')->on('events');
            $table->timestamps();
        });

        invitation::create([
            'appeared' => 'dfgdfgd',
            'event_id' => '2002.06.02',
            'user_id' => '1'
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
