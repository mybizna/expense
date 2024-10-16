<?php

namespace Modules\Expense\Models;

use Modules\Base\Models\BaseModel;
use Modules\Partner\Models\Partner;

class Expense extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = [
        'title', 'expense_no', 'partner_id', 'due_date', 'module', 'model', 'status',
        'description', 'is_posted', 'total',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "expense_expense";

    /**
     * Add relationship to Partner
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
