<?php

namespace App\Filament\Resources\ExpertResource\Pages;

use App\Filament\Resources\ExpertResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExpert extends EditRecord
{
    protected static string $resource = ExpertResource::class;
    use EditRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    
    }
    protected function getRedirectUrl(): string
    {
         return  $this->getResource()::getUrl('index');
        }
}
