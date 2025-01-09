<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Actions;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Events\ArticlePublished;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ArticleResource;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
    use CreateRecord\Concerns\Translatable;

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


    // protected function handleRecordCreation(array $data): Article
    // {

    //     $article = static::getModel()::create($data);


    //     event(new ArticlePublished($article));

    //     return $article;
    // }

}
