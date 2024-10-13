<?php

namespace Modules\Expense\Filament\Resources\ItemResource\Pages;

use Modules\Base\Filament\Resources\Pages\EditingBase;
use Modules\Expense\Filament\Resources\ItemResource;

// Class List that extends ListBase
class Editing extends EditingBase
{
    protected static string $resource = ItemResource::class;
}
