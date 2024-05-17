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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('memberType')->default(1);
            $table->integer('studentId');
            $table->integer('mobile');
            $table->integer('batch');
            $table->string('dept');
            $table->boolean('isApproved')->default(0);
            $table->integer('approvedBy')->nullable();
            $table->dateTime('approvedAt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
