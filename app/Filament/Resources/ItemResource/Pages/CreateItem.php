<?php

namespace Modules\Expense\Filament\Resources\ItemResource\Pages;

use Modules\Expense\Filament\Resources\ItemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateItem extends CreateRecord
{
    protected static string $resource = ItemResource::class;
}
