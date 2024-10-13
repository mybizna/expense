<?php

namespace Modules\Expense\Filament\Resources\ExpenseResource\Pages;

use Modules\Base\Filament\Resources\Pages\EditingBase;
use Modules\Expense\Filament\Resources\ExpenseResource;

// Class List that extends ListBase
class Editing extends EditingBase
{
    protected static string $resource = ExpenseResource::class;
}
