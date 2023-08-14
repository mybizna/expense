<?php

namespace Modules\Expense\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Detail extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['trn_no', 'ledger_id', 'particulars', 'amount'];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['trn_no'];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The fields that can be filled
     *
     * @var string
     */
    protected $table = "expense_detail";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table): void
    {
        $this->fields->increments('id')->html('text');
        $this->fields->integer('trn_no')->nullable()->html('text');
        $this->fields->integer('ledger_id')->nullable()->html('recordpicker')->table(['account', 'ledger']);
        $this->fields->string('particulars')->nullable()->html('textarea');
        $this->fields->decimal('amount', 20, 2)->default(0.00)->html('amount');
    }
}
