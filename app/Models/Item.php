<?php

namespace Modules\Expense\Models;

use Modules\Account\Models\Ledger;
use Modules\Base\Models\BaseModel;
use Modules\Expense\Models\Expense;

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
    public function expense()
    {
        return $this->belongsTo(Expense::class);
    }

    /**
     * Add relationship to Ledger
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ledger()
    {
        return $this->belongsTo(Ledger::class);
    }
}
