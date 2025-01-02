<?php

namespace App\Filament\Resources\ExpertArticleResource\Pages;

use App\Filament\Resources\ExpertArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExpertArticle extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ExpertArticleResource::class;

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
