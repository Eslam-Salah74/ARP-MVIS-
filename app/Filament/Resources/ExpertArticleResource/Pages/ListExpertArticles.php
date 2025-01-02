<?php

namespace App\Filament\Resources\ExpertArticleResource\Pages;

use App\Filament\Resources\ExpertArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExpertArticles extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ExpertArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            // Actions\LocaleSwitcher::make(),

        ];
    }
}
