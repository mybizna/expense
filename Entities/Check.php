<?php

namespace Modules\Expense\Entities;

use Modules\Base\Entities\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Check extends BaseModel
{

    protected $fillable = ['trn_no', 'check_no', 'voucher_type', 'amount', 'bank', 'name', 'pay_to'];
    public $migrationDependancy = [];
    protected $table = "expense_check";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->integer('trn_no')->nullable();
        $table->string('check_no')->nullable();
        $table->string('voucher_type')->nullable();
        $table->decimal('amount', 20, 2)->default(0.00);
        $table->string('bank')->nullable();
        $table->string('name')->nullable();
        $table->string('pay_to')->nullable();
    }
}
