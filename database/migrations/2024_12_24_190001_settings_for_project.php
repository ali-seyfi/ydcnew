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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->json('values');
            $table->timestamps();
        });

        $now = now();
        \DB::table('settings')->insert(
            [
                'values' => json_encode([
                    "course" => "HTML-CSS For Absolute Beginners",
                    "latest" => "https://www.youtube.com/watch?v=z6hkFh-dmfg",
                    "season" => "2",
                    "episode" => "13",
                    "playlist" => "https://www.youtube.com/watch?v=BoTYFC5sr8c&list=PLK-iH9NhQtRMo9bx2aiDVFlHrw1ABITG4",
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
