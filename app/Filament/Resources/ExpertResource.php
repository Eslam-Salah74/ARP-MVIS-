<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Expert;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Card;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\ExpertResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExpertResource\RelationManagers;

class ExpertResource extends Resource
{
    use Translatable;
    protected static ?string $model = Expert::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    public static function getNavigationGroup(): ?string
    {
        return __('app.expert');
    }

    public static function getNavigationSort(): ?int
    {
        return 1; // ترتيب الظهور
    }

    public static function getModelLabel(): string
    {
        return __('app.expert');
    }
        public static function getPluralModelLabel(): string
        {
            return __('app.expert');
        }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')
                        ->required()
                        ->label(__('app.name'))
                        ->maxLength(255),
                    FileUpload::make('image')
                        ->image()
                        ->required()
                        ->label(__('app.image')),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label(__('app.name'))
                ->searchable(),
                ImageColumn::make('image')
                ->label(__('app.image'))
                ->disk('public')
                ->size(30),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label(__('app.created_at'))
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->label(__('app.updated_at'))
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('delete')
                        ->label(__('app.delete'))
                        ->icon('heroicon-o-trash')
                        ->action(function (Collection $records) {
                            $deleted = 0;
                            $skipped = 0;

                            foreach ($records as $record) {
                                if ($record->experts_articles()->exists()) {
                                    $skipped++;
                                    continue;
                                }

                                $record->delete();
                                $deleted++;
                            }


                            if ($deleted > 0) {
                                Notification::make()
                                    ->title(__('app.success'))
                                    ->body(__('app.deleted_successfully', ['count' => $deleted]))
                                    ->success()
                                    ->send();
                            }

                            if ($skipped > 0) {
                                Notification::make()
                                    ->title(__('app.warning'))
                                    ->body(__('app.skipped_due_to_related_content', ['count' => $skipped]))
                                    ->warning()
                                    ->send();
                            }
                        }),
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
            'index' => Pages\ListExperts::route('/'),
            'create' => Pages\CreateExpert::route('/create'),
            'edit' => Pages\EditExpert::route('/{record}/edit'),
        ];
    }
}
