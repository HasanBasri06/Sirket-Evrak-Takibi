<?php

use App\Enums\IsActive;
use App\Enums\RoleEnum;
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
        Schema::create('company_worker', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->references('id')->on('company');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->enum('status', ['passive', 'active']);
            $table->enum('role', ['admin', 'worker']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compony_worker');
    }
};
