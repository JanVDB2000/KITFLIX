<?php

use App\Enums\ContentType;
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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('api_id')->nullable()->unique();
            $table->string('image_url')->nullable();
            $table->integer('views')->default(0);
            $table->string('video_url')->nullable();
            $table->string('content_type')->nullable();
            $table->foreignId("genre_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
