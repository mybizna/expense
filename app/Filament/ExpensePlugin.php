<?php

namespace Modules\Expense\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class ExpensePlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Expense';
    }

    public function getId(): string
    {
        return 'expense';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
