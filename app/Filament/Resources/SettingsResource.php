<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Settings;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Validation\Rule;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
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
use App\Filament\Resources\SettingsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SettingsResource\RelationManagers;
use Filament\Resources\Concerns\Translatable;
class SettingsResource extends Resource
{
    use Translatable;
    protected static ?string $model = Settings::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    // protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
{
    $record = $form->getRecord(); // Get the current model record
        $recordId = $record ? $record->id : null; // Get the record ID if it exists
    return $form

        ->schema([
            Card::make()->schema([
                Wizard::make([
                    Wizard\Step::make('basicinformation')
                        ->label(__('app.Basic Information'))
                        ->schema([
                            TextInput::make('sitename')
                                ->label(__('app.Site Name'))
                                ->required(),
                            TextInput::make('headerTitle')
                                ->label(__('app.Header Title'))
                                ->required(),
                            Textarea::make('headerSubtitle')
                                ->label(__('app.Header Subtitle'))
                                ->required(),
                        ]),

                    Wizard\Step::make('socialmedia')
                    ->label(__('app.Social Media'))
                    ->schema([
                        Repeater::make('socialmedia')
                        ->label(__('app.Social Media'))
                        ->schema([

                            TextInput::make('url')
                                ->label(__('app.URL'))
                                ->required(),

                            FileUpload::make('img')
                            ->label(__('app.Image In Footer'))
                            ->image()
                            ->required()
                            ->rules(['max:6144'])
                            ->directory('social_midea')
                            ->helperText('مقاس الصورة (28*28)'),

                            FileUpload::make('img')
                            ->label(__('app.Image In Header'))
                            ->image()
                            ->required()
                            ->rules(['max:6144'])
                            ->directory('social_midea')
                            ->helperText('مقاس الصورة (28*28)'),
                    ])
                            ->columns(3),
                    ]),

                    Wizard\Step::make('media')
                        ->label(__('app.Media'))
                        ->schema([
                            FileUpload::make('logo')
                                ->label(__('app.Logo'))
                                ->image()
                                ->required()
                                ->directory('Logo')
                                ->helperText('مقاس الصورة (968*207)'),

                            FileUpload::make('favicon')
                                ->label(__('app.Favicon'))
                                ->image()
                                ->required()
                                ->directory('Favicon')
                                ->helperText('مقاس الصورة (74*63)'),

                            FileUpload::make('headerBackground')
                                ->label(__('app.Header Background'))
                                ->image()
                                ->required()
                                ->directory('headerBackground')
                                ->helperText('مقاس الصورة (163*150)'),

                            FileUpload::make('footerBackground')
                                ->label(__('app.Footer Background'))
                                ->image()
                                ->required()
                                ->directory('footerBackground')
                                ->helperText('مقاس الصورة (163*150)'),

                            FileUpload::make('footerLogo')
                                ->label(__('app.Footer Logo'))
                                ->image()
                                ->required()
                                ->directory('footerLogo')


                        ]),

                    //     Wizard\Step::make('contactus')
                    //         ->label(__('app.Contact Us'))
                    //         ->schema([
                    //             Textarea::make('location')
                    //                 ->label(__('app.Location'))
                    //                 ->required(),
                    //             Repeater::make('contactus')
                    //             ->label(__('app.Contact Us'))
                    //             ->schema([

                    //                 TextInput::make('phone')
                    //                     ->label(__('app.phone'))
                    //                     ->required(),
                    //                 TextInput::make('address')
                    //                     ->label(__('app.address'))
                    //                     ->required(),
                    //                 TextInput::make('email')
                    //                     ->label(__('app.email'))
                    //                     ->required(),
                    //     ])
                    // ->columns(3),
                    // ]),


                ])->skippable(),
            ]),
        ]);
}


    public static function table(Table $table): Table
    {
        return $table
        ->columns([
                TextColumn::make('sitename')
                    ->label(__('app.Site Name')),
                TextColumn::make('hotline')
                    ->label(__('app.Hotline Number')),
                ImageColumn::make('logo')
                    ->label(__('app.Logo')),
                ImageColumn::make('favicon')
                    ->label(__('app.Favicon')),
                ImageColumn::make('hotline_img')
                    ->label(__('app.Hotline Image')),

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
            'create' => Pages\CreateSettings::route('/create'),
            'edit' => Pages\EditSettings::route('/{record}/edit'),
        ];
    }

    //  لاخفاء زرار الاضافة بعد اضافه اول صف فى الداتا بيز
    public static function canCreate(): bool
    {
        return Settings::count() === 0;
    }

// start tranlation of models
    public static function getNavigationLabel(): string
    {
        return __('app.Settings');
    }
    public static function getPluralLabel(): string
    {
        return  __('app.Settings');
    }
    public static function getModelLabel(): string
    {
        return  __('app.Setting');
    }

    public static function getNavigationGroup(): ?string
    {
    return __('app.Settings');
    }

    public static function getNavigationSort(): ?int
    {
        return 10; // ترتيب الظهور
    }

// اضافه اللغة
public static function getTranslatableLocales(): array
{
    return ['ar', 'en'];
}

// end tranlation of models
    // to translat navigation
    // public static function getNavigationGroup(): ?string
    // {
    //     return __('app.Blog'); // استخدام الدالة __() لجلب الترجمة
    // }
}
