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
        Schema::create('incoming_requests', function (Blueprint $table) {
            $table->id();
            $table->string('host');
            $table->string('http_host');
            $table->string('scheme_and_http_host');
            $table->string('ip_address');
            $table->json('proxied_ips');
            $table->string('method');
            $table->string('path');
            $table->string('url');
            $table->string('full_url');
            $table->json('content_type');
            $table->json('input_data');
            $table->json('query_strings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incoming_requests');
    }
};
