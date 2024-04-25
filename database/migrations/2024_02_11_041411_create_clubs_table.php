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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alias');
            $table->string('dept');
            $table->integer('room');
            $table->string('fbPageURL')->nullable();
            $table->string('fbGroupURL')->nullable();
            $table->text('intro');
            $table->text('objective');
            $table->string('committee');
            $table->string('mainImage');
            $table->text('achievements')->nullable();
            $table->integer('createdBy');
            $table->integer('updatedBy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
