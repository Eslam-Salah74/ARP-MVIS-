<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ContactResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactResource\RelationManagers;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;
    protected static ?string $recordRouteKeyName = 'id';
    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function getNavigationGroup(): ?string
    {
        return __('app.Setting');
    }
    public static function getNavigationSort(): ?int
    {
        return 10; // ترتيب الظهور
    }
    public static function getModelLabel(): string
    {
        return __('app.Contact');
    }
    public static function getPluralModelLabel(): string
    {
        return __('app.Contact');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Wizard::make([
                        Wizard\Step::make('phone')
                            ->label(__('app.Phones'))
                            ->schema([
                                Repeater::make('phone')
                                    ->schema([
                                        TextInput::make('phone')
                                            ->label(__('app.phone'))
                                            ->required(),
                                    ])
                                ->collapsible()
                                ->createItemButtonLabel('Add Phone'),
                        ]),
                        Wizard\Step::make('address')
                            ->label(__('app.Address'))
                            ->schema([
                            Repeater::make('address')
                                ->schema([
                                    TextInput::make('addressAr')
                                        ->label(__('app.addressAr'))
                                        ->required(),
                                        TextInput::make('addressEn')
                                        ->required()
                                        ->label(__('app.addressEn')),
                                ])
                                ->collapsible()
                                ->createItemButtonLabel('Add Address'),
                        ]),
                        Wizard\Step::make('email')
                            ->label(__('app.Email'))
                            ->schema([
                            Repeater::make('email')
                                ->schema([
                                    TextInput::make('email')
                                        ->label(__('app.Email'))
                                        ->required(),
                                ])
                                ->collapsible()
                                ->createItemButtonLabel('Add Email')
                        ]),
                        ])->skippable(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('phone')
                ->label(__('app.Phones'))
                ->getStateUsing(function ($record) {
                    return collect($record->phone)->pluck('phone')->implode(', ');
                }),

            TextColumn::make('address')
                ->label(__('app.Address'))
                ->getStateUsing(function ($record) {
                    return collect($record->address)->pluck('addressAr')->implode(', ');
                }),

            TextColumn::make('email')
                ->label(__('app.Email'))
                ->getStateUsing(function ($record) {
                    return collect($record->email)->pluck('email')->implode(', ');
                }),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record:id}/edit'),
        ];
    }

      //  لاخفاء زرار الاضافة بعد اضافه اول صف فى الداتا بيز
      public static function canCreate(): bool
      {
          return Contact::count() === 0;
      }
}
