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
        Schema::create('gest_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('gests');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->foreignId('upazilla_id')->constrained('upazilas')->cascadeOnDelete();
            $table->foreignId('union_id')->constrained('unions')->cascadeOnDelete();
            $table->foreignId('district_id')->constrained('districts')->cascadeOnDelete();
            $table->foreignId('division_id')->constrained('divisions')->cascadeOnDelete();
              $table->string('village_name');
              $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gest_addresses');
    }
};
