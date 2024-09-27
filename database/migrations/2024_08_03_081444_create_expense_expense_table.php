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
        Schema::create('expense_expense', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('expense_no', 100);
            $table->foreignId('partner_id')->nullable()->constrained('partner_partner')->onDelete('set null');
            $table->date('due_date');
            $table->string('module')->default('Account');
            $table->string('model')->default('Expense');
            $table->enum('status', ['draft', 'pending', 'partial', 'paid', 'closed', 'void'])->default('draft');
            $table->string('description')->nullable();
            $table->tinyInteger('is_posted')->default(0);
            $table->decimal('total', 20, 2)->nullable();

            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('deleted_by')->nullable()->constrained('users')->onDelete('set null');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expense_expense');
    }
};
