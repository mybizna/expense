<?php

namespace Modules\Expense\Entities;

use Modules\Base\Entities\BaseModel;
use Illuminate\Database\Schema\Blueprint;

use Modules\Base\Classes\Views\ListTable;
use Modules\Base\Classes\Views\FormBuilder;

class Check extends BaseModel
{
    /**
     * The fields that can be filled
     * @var array<string>
     */
    protected $fillable = ['trn_no', 'check_no', 'voucher_type', 'amount', 'bank', 'name', 'pay_to'];
    
    /**
     * List of tables names that are need in this model during migration.
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The fields that can be filled
     * @var array<string>
     */
    protected $table = "expense_check";


    public function  listTable(): ListTable
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('trn_no')->type('text')->ordering(true);
        $fields->name('check_no')->type('text')->ordering(true);
        $fields->name('voucher_type')->type('text')->ordering(true);
        $fields->name('amount')->type('text')->ordering(true);
        $fields->name('bank')->type('text')->ordering(true);
        $fields->name('name')->type('text')->ordering(true);
        $fields->name('pay_to')->type('text')->ordering(true);


        return $fields;

    }
    
    public function formBuilder(): FormBuilder
{
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('trn_no')->type('text')->group('w-1/2');
        $fields->name('check_no')->type('text')->group('w-1/2');
        $fields->name('voucher_type')->type('text')->group('w-1/2');
        $fields->name('amount')->type('text')->group('w-1/2');
        $fields->name('bank')->type('text')->group('w-1/2');
        $fields->name('name')->type('text')->group('w-1/2');
        $fields->name('pay_to')->type('text')->group('w-1/2');

        return $fields;

    }

    public function filter(): FormBuilder
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('trn_no')->type('text')->group('w-1/6');
        $fields->name('check_no')->type('text')->group('w-1/6');
        $fields->name('voucher_type')->type('text')->group('w-1/6');
        $fields->name('amount')->type('text')->group('w-1/6');
        $fields->name('bank')->type('text')->group('w-1/6');
        $fields->name('name')->type('text')->group('w-1/6');
        $fields->name('pay_to')->type('text')->group('w-1/6');


        return $fields;

    }
    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
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
