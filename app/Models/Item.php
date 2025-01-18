<?php

namespace Modules\Expense\Models;

use Modules\Account\Models\Ledger;
use Modules\Base\Models\BaseModel;
use Modules\Expense\Models\Expense;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = [
        'title', 'expense_id', 'ledger_id', 'price', 'amount', 'quantity',
        'module', 'model', 'item_id',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "expense_item";

    /**
     * Add relationship to Expense
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expense(): BelongsTo
    {
        return $this->belongsTo(Expense::class);
    }

    /**
     * Add relationship to Ledger
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ledger(): BelongsTo
    {
        return $this->belongsTo(Ledger::class);
    }

    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('title');
        $table->foreignId('expense_id')->nullable()->constrained(table: 'expense_expense')->onDelete('set null');
        $table->foreignId('ledger_id')->nullable()->constrained(table: 'account_ledger')->onDelete('set null');
        $table->decimal('price', 20, 2)->default(0.00);
        $table->decimal('amount', 20, 2)->default(0.00);
        $table->string('module')->nullable();
        $table->string('model')->nullable();
        $table->bigInteger('item_id')->nullable();
        $table->integer('quantity')->nullable();

    }
}
