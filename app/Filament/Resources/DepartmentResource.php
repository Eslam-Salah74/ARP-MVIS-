<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Department;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\DepartmentResource\Pages;
use App\Filament\Resources\DepartmentResource\RelationManagers;


class DepartmentResource extends Resource
{
    use Translatable;
    protected static ?string $recordRouteKeyName = 'id';
    protected static ?string $model = Department::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function getNavigationLabel(): string
    {
        return __('app.department');
    }

    public static function getModelLabel(): string
    {
        return __('app.department');
    }
        public static function getPluralModelLabel(): string
        {
            return __('app.department');
        }
        public static function getNavigationGroup(): ?string
        {
            return __('app.team');
        }
    protected static ?int $navigationSort=5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')
                        ->label(__('app.name'))
                        ->required()
                        ->unique()
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (?string $state, callable $set) {
                            if ($state) {
                                $slug = preg_replace('/\s+/u', '-', trim($state));
                                $slug = preg_replace('/[^\p{Arabic}\p{L}\p{N}\-]+/u', '', $slug);
                                $set('slug', $slug);
                            }
                        }),
                    Hidden::make('slug')
                        ->label(__('Slug'))
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label(__('app.name'))
                ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('delete')
                        ->label(__('app.delete'))
                        ->icon('heroicon-o-trash')
                        ->action(function (Collection $records) {
                            $deleted = 0;
                            $skipped = 0;

                            foreach ($records as $record) {
                                if ($record->team()->exists()) {
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
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'view' => Pages\ViewDepartment::route('/{record}'),
            'edit' => Pages\EditDepartment::route('/{record:id}/edit'),
        ];
    }
}
