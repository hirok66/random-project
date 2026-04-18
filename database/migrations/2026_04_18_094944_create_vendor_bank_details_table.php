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
        Schema::create('vendor_bank_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constrained()->onDelete('cascade');

            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('routing_number')->nullable();
            $table->string('branch_name')->nullable();
            $table->boolean('is_primary')->default(false);


            $table->unique(['vendor_id', 'account_number']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_bank_details');
    }
};
