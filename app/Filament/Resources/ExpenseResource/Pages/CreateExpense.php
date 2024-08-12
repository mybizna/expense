<?php

namespace Modules\Expense\Filament\Resources\ExpenseResource\Pages;

use Modules\Expense\Filament\Resources\ExpenseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExpense extends CreateRecord
{
    protected static string $resource = ExpenseResource::class;
}
