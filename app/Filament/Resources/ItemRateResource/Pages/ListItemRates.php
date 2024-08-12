<?php

namespace Modules\Expense\Filament\Resources\ItemRateResource\Pages;

use Modules\Expense\Filament\Resources\ItemRateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListItemRates extends ListRecords
{
    protected static string $resource = ItemRateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
