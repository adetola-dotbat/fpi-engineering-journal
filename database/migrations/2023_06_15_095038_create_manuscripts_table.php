<?php

use App\Enums\ManuscriptStatus;
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
        Schema::create('manuscripts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('volume_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('abstract');
            $table->string('file');
            $table->string('user_id');
            $table->string('authors');
            $table->string('status')->default(ManuscriptStatus::ACTIVE);
            $table->integer('editors_pick')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manuscripts');
    }
};
