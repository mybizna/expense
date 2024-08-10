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
        Schema::create('expense_item', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->foreignId('expense_id')->constrained('expense_expense')->onDelete('cascade')->index('expense_id');
            $table->foreignId('ledger_id')->constrained('account_ledger')->onDelete('cascade')->index('ledger_id');
            $table->decimal('price', 20, 2)->default(0.00);
            $table->decimal('amount', 20, 2)->default(0.00);
            $table->string('module')->nullable();
            $table->string('model')->nullable();
            $table->bigInteger('item_id')->nullable();
            $table->integer('quantity')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expense_item');
    }
};
