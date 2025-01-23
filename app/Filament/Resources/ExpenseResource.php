<?php

namespace Modules\Expense\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Expense\Models\Expense;

class ExpenseResource extends BaseResource
{
    protected static ?string $model = Expense::class;

    protected static ?string $slug = 'expense/expense';

    protected static ?string $navigationGroup = 'Expense';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
