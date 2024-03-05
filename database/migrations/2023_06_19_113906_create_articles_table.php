<?php

use App\Enums\PublishStatus;
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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('volume_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('abstract')->nullable();
            $table->string('file')->nullable();
            $table->string('pages')->default(0);
            $table->string('author')->nullable();
            $table->string('publish_status')->default(PublishStatus::PENDING);
            $table->string('publish_date')->nullable();
            $table->string('popularity')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
