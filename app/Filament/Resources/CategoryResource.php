<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use App\Filament\Resources\CategoryResource\RelationManagers;

class CategoryResource extends Resource
{
    use Translatable;

    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    public static function getNavigationGroup(): ?string
    {
        return __('app.article');
    }

    public static function getNavigationSort(): ?int
    {
        return 1; // ترتيب الظهور
    }

    public static function getNavigationLabel(): string
    {
        return __('app.category');
    }

    public static function getModelLabel(): string
    {
        return __('app.category');
    }
        public static function getPluralModelLabel(): string
        {
            return __('app.category');
        }
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
        ->reorderable('order')
        ->defaultSort('order', 'asc')
        ->columns([
            TextColumn::make('name')
            ->searchable()
            ->label(__('app.name'))
            ->getStateUsing(function ($record) {
                // استخدام اللغة الحالية
                $locale = app()->getLocale(); // استرجاع اللغة الحالية من Laravel
                $name = json_decode($record->name, true); // فك ترميز JSON
                return $name[$locale] ?? ($name['en'] ?? $record->name); // عرض النص بناءً على اللغة أو الافتراضي
            }),

            TextColumn::make('order')
                ->label(__('app.order'))
                ->numeric()
                ->sortable(),

            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([


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
                                if ($record->articles()->exists()) {
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
