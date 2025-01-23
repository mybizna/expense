<?php

namespace Modules\Expense\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Expense\Models\Item;

class ItemResource extends BaseResource
{
    protected static ?string $model = Item::class;

    protected static ?string $slug = 'expense/item';

    protected static ?string $navigationGroup = 'Expense';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
