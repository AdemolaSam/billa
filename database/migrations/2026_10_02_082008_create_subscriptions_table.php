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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('customer_id')->constrained();
            $table->foreignUuid('plan_id')->constrained();
            $table->string('pending_plan_id');
            $table->string('status');
            $table->string('trial_ends_at');
            $table->string('current_period_start');
            $table->string('current_period_end');
            $table->integer('failed_attempts');
            $table->string('next_retry_at');
            $table->string('canceled_at');
            $table->string('canceled_at_period_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
