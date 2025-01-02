<?php

namespace App\Filament\Resources\TeamMemberResource\Pages;

use App\Filament\Resources\TeamMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeamMembers extends ListRecords
{
    protected static string $resource = TeamMemberResource::class;
    use ListRecords\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            // Actions\LocaleSwitcher::make(),

        ];
    }
}
