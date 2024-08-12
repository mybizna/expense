<?php

namespace Modules\Expense\Filament\Resources\ItemRateResource\Pages;

use Modules\Expense\Filament\Resources\ItemRateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditItemRate extends EditRecord
{
    protected static string $resource = ItemRateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
