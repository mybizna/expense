<?php

namespace Modules\Expense\Filament\Resources\ExpenseResource\Pages;

use Modules\Base\Filament\Resources\Pages\CreatingBase;
use Modules\Expense\Filament\Resources\ExpenseResource;

// Class List that extends ListBase
class Creating extends CreatingBase
{
    protected static string $resource = ExpenseResource::class;
}
