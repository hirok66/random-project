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
        Schema::create('vandors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            // Store Basic Info
            $table->string('store_name');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->text('about')->nullable();
            $table->year('since_year')->nullable();

            // Business Details
            $table->string('business_email')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('registration_number')->nullable(); // Trade License
            $table->string('tax_number')->nullable();          // TIN / VAT

            // Owner Info (if separate from user table)
            $table->string('owner_name')->nullable();
            $table->string('owner_phone')->nullable();

            // Address
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->default('Bangladesh');
            $table->string('postal_code')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();

            // Media
            $table->string('logo')->nullable();
            $table->string('banner_image')->nullable();

            // Rating & Stats
            $table->decimal('average_rating', 3, 2)->default(0.00);
            $table->unsignedInteger('total_reviews')->default(0);
            $table->unsignedInteger('total_products')->default(0);
            $table->unsignedBigInteger('total_sales')->default(0);

            // Commission & Business Settings
            $table->decimal('commission_rate', 5, 2)->default(0.00); // Platform commission %
            $table->decimal('minimum_order_amount', 10, 2)->default(0.00);
            $table->string('delivery_time')->nullable();

            // Status & Verification
            $table->boolean('is_active')->default(true);
            $table->boolean('is_verified')->default(false);
            $table->enum('verification_status', ['pending', 'approved', 'rejected'])
                  ->default('pending');

            // Social Links
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('pinterest_url')->nullable();
            $table->string('whatsapp_number')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();


            // Indexes
            $table->index(['is_active', 'verification_status']);
            $table->index('average_rating');

            


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vandors');
    }
};
