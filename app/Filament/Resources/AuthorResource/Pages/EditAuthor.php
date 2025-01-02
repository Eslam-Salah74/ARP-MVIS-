<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use App\Filament\Resources\AuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAuthor extends EditRecord
{
    protected static string $resource = AuthorResource::class;
    
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
