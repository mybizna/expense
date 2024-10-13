<?php

namespace Modules\Expense\Filament\Resources\ItemRateResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\Expense\Filament\Resources\ItemRateResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = ItemRateResource::class;
}
