<?php

namespace Modules\Expense\Entities;

use Modules\Base\Entities\BaseModel;
use Illuminate\Database\Schema\Blueprint;

use Modules\Core\Classes\Views\ListTable;
use Modules\Core\Classes\Views\FormBuilder;

class Expense extends BaseModel
{

    protected $fillable = [
        'voucher_no', 'people_id', 'people_name', 'address', 'trn_date', 'amount',
        'ref', 'check_no', 'particulars', 'status', 'trn_by', 'transaction_charge',
        'trn_by_ledger_id', 'attachments'
    ];
    public $migrationDependancy = [];
    protected $table = "expense";


    public function listTable(){
        // listing view fields
        $fields = new ListTable();

        $fields->name('voucher_no')->type('text')->ordering(true);
        $fields->name('people_id')->type('text')->ordering(true);
        $fields->name('people_name')->type('text')->ordering(true);
        $fields->name('address')->type('text')->ordering(true);
        $fields->name('trn_date')->type('text')->ordering(true);
        $fields->name('amount')->type('text')->ordering(true);
        $fields->name('ref')->type('text')->ordering(true);
        $fields->name('check_no')->type('text')->ordering(true);

        return $fields;

    }
    
    public function formBuilder(){
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('voucher_no')->type('text')->group('w-1/2');
        $fields->name('people_id')->type('text')->group('w-1/2');
        $fields->name('people_name')->type('text')->group('w-1/2');
        $fields->name('address')->type('text')->group('w-1/2');
        $fields->name('trn_date')->type('text')->group('w-1/2');
        $fields->name('amount')->type('text')->group('w-1/2');
        $fields->name('ref')->type('text')->group('w-1/2');
        $fields->name('check_no')->type('text')->group('w-1/2');
        $fields->name('particulars')->type('text')->group('w-1/2');
        $fields->name('status')->type('switch')->group('w-1/2');
        $fields->name('trn_by')->type('text')->group('w-1/2');
        $fields->name('transaction_charge')->type('text')->group('w-1/2');
        $fields->name('trn_by_ledger_id')->type('text')->group('w-1/2');
        $fields->name('attachments')->type('text')->group('w-1/2');


        return $fields;

    }

    public function filter(){
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('voucher_no')->type('text')->group('w-1/6');
        $fields->name('people_id')->type('text')->group('w-1/6');
        $fields->name('people_name')->type('text')->group('w-1/6');

        return $fields;

    }
    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->integer('voucher_no')->nullable();
        $table->integer('people_id')->nullable();
        $table->string('people_name')->nullable();
        $table->string('address')->nullable();
        $table->date('trn_date')->nullable();
        $table->decimal('amount', 20, 2)->default(0.00);
        $table->string('ref')->nullable();
        $table->string('check_no')->nullable();
        $table->string('particulars')->nullable();
        $table->integer('status')->nullable();
        $table->integer('trn_by')->nullable();
        $table->decimal('transaction_charge', 20, 2)->default(0.00);
        $table->integer('trn_by_ledger_id')->nullable();
        $table->string('attachments')->nullable();
    }
}
