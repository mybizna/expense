<?php

namespace Modules\Expense\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Expense extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = [
        'voucher_no', 'people_id', 'people_name', 'address', 'trn_date', 'amount',
        'ref', 'check_no', 'particulars', 'status', 'trn_by', 'transaction_charge',
        'trn_by_ledger_id', 'attachments',
    ];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['voucher_no'];

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
    protected $table = "expense";

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
        $this->fields->integer('voucher_no')->nullable()->html('text');
        $this->fields->integer('people_id')->nullable()->html('text');
        $this->fields->string('people_name')->nullable()->html('text');
        $this->fields->string('address')->nullable()->html('text');
        $this->fields->date('trn_date')->nullable()->html('date');
        $this->fields->decimal('amount', 20, 2)->default(0.00)->html('amount');
        $this->fields->string('ref')->nullable()->html('textarea');
        $this->fields->string('check_no')->nullable()->html('text');
        $this->fields->string('particulars')->nullable()->html('textarea');
        $this->fields->integer('status')->nullable()->html('text');
        $this->fields->integer('trn_by')->nullable()->html('text');
        $this->fields->decimal('transaction_charge', 20, 2)->default(0.00)->html('amount');
        $this->fields->integer('trn_by_ledger_id')->nullable()->html('text');
        $this->fields->string('attachments')->nullable()->html('files');
    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['voucher_no', 'people_id', 'trn_date', 'amount', 'status', 'trn_by', 'transaction_charge', 'trn_by_ledger_id'];
        $structure['filter'] = ['voucher_no', 'people_id', 'trn_date', 'status', 'trn_by', 'trn_by_ledger_id'];

        return $structure;
    }
}
