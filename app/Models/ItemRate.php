<?php

namespace Modules\Expense\Models;

use Modules\Account\Models\Rate;
use Modules\Base\Models\BaseModel;
use Modules\Expense\Models\ExpenseItem;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemRate extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = [
        'title', 'slug', 'rate_id', 'expense_item_id', 'method', 'value', 'params', 'ordering', 'on_total',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "expense_item_rate";

    /**
     * Add relationship to ExpenseItem
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function expenseItem(): BelongsTo
    {
        return $this->belongsTo(ExpenseItem::class);
    }

    /**
     * Add relationship to Rate
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function rate(): BelongsTo
    {
        return $this->belongsTo(Rate::class);
    }


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('title');
        $table->string('slug');
        $table->foreignId('rate_id')->nullable()->constrained('account_rate')->onDelete('set null');
        $table->foreignId('expense_item_id')->nullable()->constrained('expense_item')->onDelete('set null');
        $table->enum('method', ['+', '+%', '-', '-%'])->default('+');
        $table->decimal('value', 20, 2)->default(0.00);
        $table->string('params')->nullable();
        $table->tinyInteger('ordering')->nullable();
        $table->tinyInteger('on_total')->default(false);

    }
}
