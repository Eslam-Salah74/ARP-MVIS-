<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
    use CreateRecord\Concerns\Translatable;

class CreateAbout extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AboutResource::class;
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
