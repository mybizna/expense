<?php
namespace Modules\Expense\Models;

use Base\Casts\Money;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
use Modules\Account\Models\Ledger;
use Modules\Base\Models\BaseModel;
use Modules\Expense\Models\Expense;

class Item extends BaseModel
{

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'total' => Money::class, // Use the custom MoneyCast
    ];
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

        $table->string('title');
        $table->unsignedBigInteger('expense_id')->nullable();
        $table->unsignedBigInteger('ledger_id')->nullable();
        $table->integer('price')->default(0);
        $table->integer('amount')->default(0);
        $table->string('currency')->default('USD');
        $table->string('module')->nullable();
        $table->string('model')->nullable();
        $table->bigInteger('item_id')->nullable();
        $table->integer('quantity')->nullable();

    }

    public function post_migration(Blueprint $table): void
    {
        $table->foreign('expense_id')->references('id')->on('expense_expense')->onDelete('set null');
        $table->foreign('ledger_id')->references('id')->on('account_ledger')->onDelete('set null');
    }
}
