<?php

use App\Models\events;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id("event_id");
            $table->date("date");
            $table->string("location");
            $table->id("org_id");
            $table->foreignId('org_id')->references('org_id')->on('organisators');
            $table->timestamps();
        });

        events::create([
            'date' => '2002.06.02',
            'location' => 'dfgfdgdf',
            'org_id' => 1
        ]);

        events::create([
            'date' => '2002.06.02',
            'location' => 'dfgfdgdfgdgdf',
            'org_id' => 2
        ]);

        events::create([
            'date' => '2002.06.02',
            'location' => 'dfgfdgdfgdgdf',
            'org_id' => 3
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
