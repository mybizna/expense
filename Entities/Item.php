<?php

namespace Modules\Expense\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;
use Modules\Base\Entities\BaseModel;

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


    




}
