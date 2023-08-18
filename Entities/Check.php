<?php

namespace Modules\Expense\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Check extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['trn_no', 'check_no', 'voucher_type', 'amount', 'bank', 'name', 'pay_to'];

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
    protected $table = "expense_check";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->increments('id')->html('text');
        $this->fields->integer('trn_no')->nullable()->html('text');
        $this->fields->string('check_no')->nullable()->html('text');
        $this->fields->string('voucher_type')->nullable()->html('text');
        $this->fields->decimal('amount', 20, 2)->default(0.00)->html('amount');
        $this->fields->string('bank')->nullable()->html('text');
        $this->fields->string('name')->nullable()->html('text');
        $this->fields->string('pay_to')->nullable()->html('text');
    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['trn_no', 'check_no', 'voucher_type', 'amount', 'bank', 'name', 'pay_to'];
        $structure['filter'] = ['trn_no', 'check_no', 'voucher_type', 'bank', 'name'];

        return $structure;
    }

}
