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
        Schema::create('products', function (Blueprint $table) {

            // ==========================================
            // Primary Key
            // ==========================================

            // BIGINT UNSIGNED + AUTO INCREMENT
            $table->id();


            // ==========================================
            // String / Text Types
            // ==========================================

            // VARCHAR: ছোট text
            $table->string('name');

            // VARCHAR with maximum length
            $table->string('sku', 100)->unique();

            // CHAR: fixed-length string
            $table->char('code', 10)->nullable();

            // TEXT: medium/large text
            $table->text('short_description')->nullable();

            // LONGTEXT: অনেক বড় text
            $table->longText('description')->nullable();

            // ==========================================
            // Number Types
            // ==========================================

            // INTEGER: পূর্ণ সংখ্যা
            $table->integer('stock_count')->default(0);

            // SMALL INTEGER: ছোট range-এর পূর্ণ সংখ্যা
            $table->smallInteger('minimum_stock')->default(0);

            // BIG INTEGER: অনেক বড় পূর্ণ সংখ্যা
            $table->bigInteger('views')->default(0);

            // UNSIGNED INTEGER: negative value হবে না
            $table->unsignedInteger('sold_count')->default(0);

            // DECIMAL: exact decimal value
            // 8 = মোট digit, 2 = decimal-এর পরের digit
            $table->decimal('price', 8, 2);

            // FLOAT: floating-point decimal number
            $table->float('rating', 3, 2)->nullable();

            // DOUBLE: বেশি precision-এর floating number
            $table->double('weight')->nullable();

            // ==========================================
            // Boolean
            // ==========================================

            // BOOLEAN: true/false অথবা 1/0
            $table->boolean('is_active')->default(true);

            // ==========================================
            // Enum
            // ==========================================

            // ENUM: নির্দিষ্ট কিছু value-এর মধ্যে একটি
            $table->enum('status', [
                'available',
                'out_of_stock',
                'discontinued'
            ])->default('available');

            // ==========================================
            // JSON
            // ==========================================

            // JSON: structured JSON data
            $table->json('meta_data')->nullable();

            // ==========================================
            // Date / Time Types
            // ==========================================

            // DATE: শুধু তারিখ
            $table->date('manufacture_date')->nullable();

            // DATETIME: date + time
            $table->dateTime('published_at')->nullable();

            // TIME: শুধু সময়
            $table->time('delivery_time')->nullable();

            // TIMESTAMP: timestamp
            $table->timestamp('approved_at')->nullable();

            // ==========================================
            // Binary
            // ==========================================

            // BINARY: binary data রাখার জন্য
            $table->binary('file_data')->nullable();

            // ==========================================
            // UUID
            // ==========================================

            // UUID: unique identifier
            $table->uuid('uuid')->unique();

            // ==========================================
            // IP Address
            // ==========================================

            // IP address store করার জন্য
            $table->ipAddress('created_ip')->nullable();

            // ==========================================
            // MAC Address
            // ==========================================

            // MAC address store করার জন্য
            $table->macAddress('device_mac')->nullable();

            // ==========================================
            // Soft Delete
            // ==========================================

            // deleted_at NULL থাকলে active
            // deleted_at value থাকলে soft deleted
            $table->softDeletes();

            // ==========================================
            // Created At / Updated At
            // ==========================================

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

