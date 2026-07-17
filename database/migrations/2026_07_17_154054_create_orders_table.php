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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->foreignId('kitchen_worker_id')
                ->nullable()
                ->constrained('employees')
                ->nullOnDelete();
            $table->foreignId('delivery_worker_id')
                ->nullable()
                ->constrained('employees')
                ->nullOnDelete();
            $table->foreignId('address_id')->constrained()->cascadeOnDelete();
            $table->enum('status', [
                'pending',
                'preparing',
                'ready',
                'delivering',
                'completed',
                'cancelled'
            ]);
            $table->decimal('total_price', 8, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
