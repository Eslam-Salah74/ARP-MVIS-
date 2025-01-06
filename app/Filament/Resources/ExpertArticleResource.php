<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Expert;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\ExpertArticle;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Actions\DeleteAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExpertArticleResource\Pages;
use App\Filament\Resources\ExpertArticleResource\RelationManagers;

class ExpertArticleResource extends Resource
{
    use Translatable;
    protected static ?string $recordRouteKeyName = 'id';
    protected static ?string $model = ExpertArticle::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    public static function getNavigationGroup(): ?string
    {
        return __('app.expert');
    }

    public static function getNavigationSort(): ?int
    {
        return 2; // ترتيب الظهور
    }

    public static function getModelLabel(): string
    {
        return __('app.expert_article');
    }
        public static function getPluralModelLabel(): string
        {
            return __('app.expert_article');
        }
        public static function form(Form $form): Form
        {
            return $form
                ->schema([
                    Card::make()->schema([
                        Wizard::make([
                            Wizard\Step::make('bassic')
                                ->label(__('app.Basic Information'))
                                ->schema([
                                    TextInput::make('title')
                                        ->label(__('app.title'))
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

                                    Select::make('category_id')
                                        ->relationship('category', 'name')
                                        ->required()
                                        ->label(__('app.category'))
                                        ->options(Category::all()->pluck('name', 'id')),

                                    Select::make('expert_id')
                                        ->relationship('expert', 'name')
                                        ->required()
                                        ->label(__('app.expert_name'))
                                        ->options(Expert::all()->pluck('name', 'id')),
                                ]),
                            Wizard\Step::make('content')
                                ->label(__('app.Content'))
                                ->schema([
                                    RichEditor::make('content')
                                        ->required()
                                        ->label(__('app.content'))
                                        ->columnSpan('full')
                                        ->toolbarButtons([
                                            'blockquote',
                                            'bold',
                                            'bulletList',
                                            'h2',
                                            'h3',
                                            'link',
                                            'orderedList',
                                            'redo',
                                            'underline',
                                            'undo',
                                        ]),
                                ]),
                        ])->skippable(), // إغلاق الـ Wizard بشكل صحيح
                    ]),
                ]);
        }


    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('order')
        ->defaultSort('order', 'asc')
        ->headerActions([
            Tables\Actions\Action::make('export')
                ->label(__('app.Export excel'))  // The button label
                ->icon('heroicon-o-arrow-down-on-square')  // Optional icon
                // ->url(route('export-expert-articles'))  // Call the export route
                ->openUrlInNewTab(),  // Optional: To open in a new tab
        ])
        ->columns([
                TextColumn::make('expert.name')
                    ->numeric()
                    ->sortable()
                    ->label(__('app.expert_name')),
                TextColumn::make('title')
                    ->label(__('app.title'))
                    ->searchable(),
                    TextColumn::make('order')
                    ->label(__('app.order'))
                    ->numeric()
                    ->sortable(),
                TextColumn::make('views')
                    ->label(__('app.views'))
                    ->numeric()
                    ->sortable(),
                // Tables\Columns\IconColumn::make('homepage')
                //     ->label(__('app.homepage'))
                //     ->boolean(),
                TextColumn::make('created_at')
                ->label(__('app.created_at'))
                ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')

                ->label(__('app.updated_at'))
                ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('expert_id')
                    ->label('Expert')
                    ->options(function () {
                        return Expert::query()
                            ->pluck('name', 'id')
                            ->toArray();
                    })

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
            'index' => Pages\ListExpertArticles::route('/'),
            'create' => Pages\CreateExpertArticle::route('/create'),
            'edit' => Pages\EditExpertArticle::route('/{record:id}/edit'),
        ];
    }
}
