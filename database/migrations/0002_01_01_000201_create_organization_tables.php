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
        Schema::create('org_corps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('uuid')->unique();
            $table->enum('type', ['company', 'government', 'vendor', 'institution'])->nullable();
            $table->json('attributes')->nullable();
            $table->timestamps();
        });
        Schema::create('org_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('org_corp_id')->nullable()->constrained();
            $table->foreignId('parent_id')->nullable()->constrained('org_units');
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('uuid')->unique();
            $table->string('description')->nullable();
            $table->json('attributes')->nullable();
            $table->timestamps();
        });
        Schema::create('org_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('org_unit_id')->constrained();
            $table->string('name');
            $table->string('code')->nullable();
            $table->boolean('is_active')->default(true);
            $table->json('attributes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('org_teams');
        Schema::dropIfExists('org_units');
        Schema::dropIfExists('org_corps');
    }
};
