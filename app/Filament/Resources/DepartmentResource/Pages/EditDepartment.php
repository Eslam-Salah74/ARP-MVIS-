<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use App\Filament\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDepartment extends EditRecord
{
    protected static string $resource = DepartmentResource::class;
    use EditRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        
        return [
            Actions\ViewAction::make(),
            // Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
