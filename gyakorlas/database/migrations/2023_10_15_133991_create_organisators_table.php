<?php

use App\Models\organisators;
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
        Schema::create('organisators', function (Blueprint $table) {
            $table->id('org_id');
            $table->String("name");
            $table->String("description");
            $table->timestamps();
        });

        organisators::create([
            'name' => 'sajt2',
            'description' => 'dfgjkjdgdk'
        ]);

        organisators::create([
            'name' => 'sajt',
            'description' => 'dfgjkjdgdk'
        ]);

        organisators::create([
            'name' => 'sajt3',
            'description' => 'dfgjkjdgdk'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisators');
    }
};
