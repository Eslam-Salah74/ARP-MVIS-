<?php

namespace App\Filament\Resources\ExpertResource\Pages;

use App\Filament\Resources\ExpertResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExpert extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ExpertResource::class;

    protected function getRedirectUrl(): string
    {
         return  $this->getResource()::getUrl('index');
    }
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
