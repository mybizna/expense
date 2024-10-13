<?php

namespace Modules\Expense\Filament\Resources\ExpenseResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\Expense\Filament\Resources\ExpenseResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = ExpenseResource::class;
}
