<?php

namespace Modules\Expense\Entities;

use Modules\Base\Entities\BaseModel;

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
    protected $table = "expense";


}
