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
        Schema::create('unions', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('upazilla_id');  // upazilla_id (int(3))
            $table->string('name', 60);                   // name
            $table->string('bn_name', 100);               // Bengali name
            $table->string('url', 100)->nullable();       // url (some are null)
            $table->timestamps();                         // created_at, updated_at
            $table->index('upazilla_id');
            // Foreign Key
            $table->foreign('upazilla_id')
                  ->references('id')
                  ->on('upazilas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unions');
    }
};
