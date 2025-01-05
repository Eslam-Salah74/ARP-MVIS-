<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;

use App\Models\Setting;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\SettingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SettingResource\RelationManagers;

class SettingResource extends Resource
{
    use Translatable;
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';

    public static function getNavigationGroup(): ?string
    {
        return __('app.Settings');
    }

    public static function getNavigationSort(): ?int
    {
        return 10; // ترتيب الظهور
    }

    public static function getModelLabel(): string
    {
        return __('app.Setting');
    }
    public static function getPluralModelLabel(): string
    {
        return __('app.Setting');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('sitename')
                        ->required()
                        ->label(__('app.Sitename'))
                        ->maxLength(255),
                    TextInput::make('headerTitle')
                        ->required()
                        ->label(__('app.Header Title'))
                        ->maxLength(255),
                    TextInput::make('headerSubtitle')
                        ->required()
                        ->label(__('app.Header Subtitle'))
                        ->maxLength(255),

                    FileUpload::make('logo')
                        ->image()
                        ->required()
                        ->label(__('app.Logo')),

                    FileUpload::make('favicon')
                        ->image()
                        ->required()
                        ->label(__('app.Favicon')),

                    FileUpload::make('headerBackground')
                        ->image()
                        ->required()
                        ->label(__('app.Header Background')),

                    FileUpload::make('footerBackground')
                        ->image()
                        ->required()
                        ->label(__('app.Footer Background')),

                    FileUpload::make('footerLogo')
                        ->image()
                        ->required()
                        ->label(__('app.Footer Logo')),


                    Repeater::make('socialmedia')
                        ->schema([
                            TextInput::make('url')
                                ->label(__('app.URL'))
                                ->required(),
                            FileUpload::make('img1')
                                ->image()
                                ->required()
                                ->label(__('app.Icon In Header')),
                            FileUpload::make('img2')
                                ->image()
                                ->required()
                                ->label(__('app.Icon In Footer')),
                        ])
                        ->collapsible()
                        ->createItemButtonLabel('Add Social Media')

                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sitename')
                    ->label(__('app.Sitename')) ,

                ImageColumn::make('logo')
                    ->label(__('app.Logo')),

                ImageColumn::make('favicon')
                    ->label(__('app.Favicon')),
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }



    //  لاخفاء زرار الاضافة بعد اضافه اول صف فى الداتا بيز
    public static function canCreate(): bool
    {
        return Setting::count() === 0;
    }
}
