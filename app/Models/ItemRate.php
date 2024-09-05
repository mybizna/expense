<?php

namespace Modules\Expense\Models;

use Modules\Account\Models\Rate;
use Modules\Base\Models\BaseModel;
use Modules\Expense\Models\ExpenseItem;

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

    public function expenseItem()
    {
        return $this->belongsTo(ExpenseItem::class);
    }

    /**
     * Add relationship to Rate
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function rate()
    {
        return $this->belongsTo(Rate::class);
    }
}
