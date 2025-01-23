<?php

namespace Modules\Expense\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Expense\Models\ItemRate;

class ItemRateResource extends BaseResource
{
    protected static ?string $model = ItemRate::class;

    protected static ?string $slug = 'expense/item/rate';

    protected static ?string $navigationGroup = 'Expense';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
