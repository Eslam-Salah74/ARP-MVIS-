<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\About;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Doctrine\DBAL\Schema\Schema;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\AboutResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AboutResource\RelationManagers;

class AboutResource extends Resource
{
    use Translatable;
    protected static ?string $recordRouteKeyName = 'id';
    protected static ?string $model = About::class;
    public static function getNavigationGroup(): ?string
    {
        return __('app.about');
    }

    public static function getNavigationSort(): ?int
    {
        return 5; // ترتيب الظهور
    }

public static function getModelLabel(): string
{
    return __('app.about');
}
    public static function getPluralModelLabel(): string
    {
        return __('app.about');
    }

    protected static ?string $navigationIcon = 'heroicon-s-information-circle';
    protected static ?int $navigationSort=6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Wizard::make([

                        Wizard\Step::make('basic')
                            ->label(__('app.Basic Information'))
                            ->schema([
                                Textarea::make('content1')
                                    ->label(__('app.content1'))
                                    ->required()
                                    ->maxLength(255),
                                Textarea::make('content2')
                                    ->label(__('app.content2'))
                                    ->required()
                                    ->maxLength(255),
                                Textarea::make('content3')
                                    ->label(__('app.content3'))
                                    ->required()
                                    ->maxLength(255),
                        ]),

                        Wizard\Step::make('features')
                        ->label(__('app.Features'))
                        ->schema([
                            Repeater::make('features')
                            ->label(__('app.Features'))
                            ->schema([
                                // عمود العنوان
                                TextInput::make('title')
                                    ->label(__('app.title'))
                                    ->required(),

                                Textarea::make('content')
                                ->label(__('app.content'))
                                ->required(),
                                ])->columns(2),
                            ]),
                        Wizard\Step::make('media')
                            ->label(__('app.Media'))
                            ->schema([
                            FileUpload::make('image')
                                ->label(__('app.image'))
                                ->required(),
                        ]),

                    ])->skippable(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('content1')
                ->searchable()
                ->label(__('app.content1'))
                ->formatStateUsing(fn ($state) => strip_tags($state))
                ->limit(25)
                ->sortable(),
            TextColumn::make('content2')
                ->searchable()
                ->label(__('app.content2'))
                ->formatStateUsing(fn ($state) => strip_tags($state))
                ->limit(25)
                ->sortable(),
            TextColumn::make('content3')
                ->searchable()
                ->label(__('app.content3'))
                ->formatStateUsing(fn ($state) => strip_tags($state))
                ->limit(25)
                ->sortable(),
            ImageColumn::make('image')
                ->label(__('app.image'))
                ->size(70),


            TextColumn::make('created_at')
                ->dateTime()
                ->label(__('app.created_at'))
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('updated_at')
                ->dateTime()
                ->label(__('app.updated_at'))
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    EditAction::make(),
                    ViewAction::make(),
                    DeleteAction::make(),
                ])
            ])
            ->bulkActions([

            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record:id}/edit'),
        ];
    }


    //  لاخفاء زرار الاضافة بعد اضافه اول صف فى الداتا بيز
    public static function canCreate(): bool
    {
        return About::count() === 0;
    }
}
