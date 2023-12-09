<?php

use App\Enums\StatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('tx_id')->index();
            $table
                ->foreignId('affiliate_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->json('btc_addresses');
            $table->string('mix_btc_address');
            $table->text('qr')->nullable();
            $table->unsignedInteger('fee')->default(0);
            $table->unsignedInteger('delay')->default(0);
            $table->string('amount')->nullable();
            $table->enum('status', StatusEnum::values());
            $table->ipAddress()->nullable();
            $table->text('user_agent')->nullable();
            $table->string('country_flag')->nullable();
            $table->string('country_name')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
