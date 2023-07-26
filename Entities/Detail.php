<?php

namespace Modules\Expense\Entities;

use Modules\Base\Entities\BaseModel;
use Illuminate\Database\Schema\Blueprint;

use Modules\Core\Classes\Views\ListTable;
use Modules\Core\Classes\Views\FormBuilder;

class Detail extends BaseModel
{

    protected $fillable = ['trn_no', 'ledger_id', 'particulars', 'amount'];
    public $migrationDependancy = [];
    protected $table = "expense_detail";


    public function listTable(){
        // listing view fields
        $fields = new ListTable();

        $fields->name('trn_no')->type('text')->ordering(true);
        $fields->name('ledger_id')->type('recordpicker')->table('account_ledger')->ordering(true);
        $fields->name('particulars')->type('text')->ordering(true);
        $fields->name('amount')->type('text')->ordering(true);


        return $fields;

    }
    
    public function formBuilder(){
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('trn_no')->type('text')->group('w-1/2');
        $fields->name('ledger_id')->type('recordpicker')->table('account_ledger')->group('w-1/2');
        $fields->name('particulars')->type('text')->group('w-1/2');
        $fields->name('amount')->type('text')->group('w-1/2');


        return $fields;

    }

    public function filter(){
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('trn_no')->type('text')->group('w-1/6');
        $fields->name('ledger_id')->type('recordpicker')->table('account_ledger')->group('w-1/6');
        $fields->name('amount')->type('text')->group('w-1/6');

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
        $table->integer('trn_no')->nullable();
        $table->integer('ledger_id')->nullable();
        $table->string('particulars')->nullable();
        $table->decimal('amount', 20, 2)->default(0.00);
    }
}
