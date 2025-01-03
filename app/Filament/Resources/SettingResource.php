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
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
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
                        ->label(__('app.sitename'))
                        ->maxLength(255),
                    TextInput::make('headerTitle')
                        ->required()
                        ->label(__('app.headerTitle'))
                        ->maxLength(255),
                    TextInput::make('headerSubtitle')
                        ->required()
                        ->label(__('app.headerSubtitle'))
                        ->maxLength(255),
                  
                    FileUpload::make('logo')
                        ->image()
                        ->required()
                        ->label(__('app.logo')),

                    FileUpload::make('favicon')
                        ->image()
                        ->required()
                        ->label(__('app.favicon')),

                    FileUpload::make('headerBackground')
                        ->image()
                        ->required()
                        ->label(__('app.headerBackground')),

                    FileUpload::make('footerBackground')
                        ->image()
                        ->required()
                        ->label(__('app.footerBackground')),

                    FileUpload::make('footerLogo')
                        ->image()
                        ->required()
                        ->label(__('app.footerLogo')),


                    Repeater::make('socialmedia')
                        ->schema([
                            TextInput::make('url')
                                ->label(__('app.URL'))
                                ->required(),
                            FileUpload::make('img1')
                                ->image()
                                ->required()
                                ->label(__('app.img1')),
                            FileUpload::make('img2')
                                ->image()
                                ->required()
                                ->label(__('app.img2')),
                        ])
                        ->collapsible() 
                        ->createItemButtonLabel('Add Item') 
                          
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
}
