<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Author;
use App\Models\Article;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;

use App\Events\ArticlePublished;

use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Card;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;

use Illuminate\Support\Facades\Route;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;


class ArticleResource extends Resource
{
    use Translatable;
    protected static ?string $recordRouteKeyName = 'id';
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function getNavigationGroup(): ?string
    {
        return __('app.article');
    }

    public static function getNavigationSort(): ?int
    {
        return 3; // ترتيب الظهور
    }

    public static function getNavigationLabel(): string
    {
        return __('app.article');
    }

    public static function getModelLabel(): string
    {
        return __('app.article');
    }
        public static function getPluralModelLabel(): string
        {
            return __('app.article');
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

                        Select::make('author_id')
                            ->relationship('author', 'name')
                            ->label(__('app.Author'))
                            ->options(Author::all()->pluck('name', 'id')),

                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->required()
                            ->label(__('app.category'))
                            ->options(Category::all()->pluck('name', 'id')),

                        TextInput::make('subtitle')
                            ->label(__('app.Subtitle'))
                            ->maxLength(255),


                    ]),
                    Wizard\Step::make('content')
                    ->label(__('app.Content'))
                    ->schema([
                        Textarea::make('summary')
                            ->label(__('app.summary')),

                        RichEditor::make('content')
                        ->required()
                        ->label(__('app.content'))
                        ->columnSpan('full')
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsDirectory('EditorImages')
                        ->fileAttachmentsVisibility('public')
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
                            'attachFiles',
                        ]),



                    ]),
                    Wizard\Step::make('media')
                    ->label(__('app.Media'))
                    ->schema([
                        FileUpload::make('featured_image')
                            ->image()
                            ->label(__('app.featured_image')),
                        FileUpload::make('image')
                            ->image()
                            ->label(__('app.image'))
                            ->required(),
                    ]),
                    // Wizard\Step::make('visabilaty')
                    // ->label(__('app.What Next'))
                    // ->schema([
                    //     // Toggle::make('slider')
                    //     //     ->label(__('app.slider')),
                    //     Toggle::make('homepage')
                    //         ->label(__('app.What Next')),
                    // ]),

                ])->skippable(),
            ]),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        // ->reorderable('order')

        // ->defaultSort('order', 'asc')
        // ->headerActions([
        //     Tables\Actions\Action::make('export')
        //         ->label(__('app.Export excel'))  // The button label
        //         ->icon('heroicon-o-arrow-down-on-square')  // Optional icon
        //         // ->url(route('export-articles'))  // Call the export route
        //         ->openUrlInNewTab(),  // Optional: To open in a new tab
        // ])
        ->columns([
            TextColumn::make('title')
            ->label(__('app.title'))
            ->searchable(),

            TextColumn::make('category.name')
            ->label(__('app.category'))
            ->sortable(),

            ImageColumn::make('image')
                ->label(__('app.image'))
                ->size(30),

            TextColumn::make('views')
                    ->label(__('app.views'))
                    ->numeric()
                    ->sortable(),
            // TextColumn::make('order')
            //         ->label(__('app.order'))
            //         ->numeric()
            //         ->sortable(),

            // IconColumn::make('homepage')
            //         ->label(__('app.What Next'))
            //         ->boolean(),


            TextColumn::make('created_at')
                    ->label(__('app.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                    ->label(__('app.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category_id')
                ->label(__('app.category'))
                    ->options(function () {
                        return Category::query()
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
                BulkAction::make('bulkEdit')
                    ->label(__('BulkEdit'))
                    ->action(function (Collection $records, array $data) {
                        foreach ($records as $record) {
                            $record->update([
                                'category_id' => $data['category_id'],
                                'author_id' => $data['author_id'],
                                // 'slider' => $data['slider'],
                                'homepage' => $data['homepage'],
                            ]);
                        }

                        Notification::make()
                            ->title(__('app.success'))
                            ->body(__('app.records_updated_successfully'))
                            ->success()
                            ->send();
                    })

                    ->form([
                        Select::make('category_id')
                            ->label(__('app.category'))
                            ->options(Category::all()->pluck('name', 'id'))
                            ->required(),

                        Select::make('author_id')
                        ->label(__('app.Author'))
                        ->options(Author::all()->pluck('name', 'id'))
                            ->required(),

                        // Forms\Components\Toggle::make('slider')
                        //     ->label(__('app.slider')),

                        // Forms\Components\Toggle::make('homepage')
                        //     ->label(__('app.homepage')),

                    ]),
                Tables\Actions\DeleteBulkAction::make(),

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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record:id}/edit'),
        ];
    }

    public static function mutateFormDataBeforeCreate(array $data): array
    {
        // هنا يمكنك إضافة أي تعديل على البيانات قبل الحفظ
        return $data;
    }

    public static function afterCreate($record): void
    {
        // إطلاق الحدث بعد إنشاء المقال
        event(new ArticlePublished($record));
    }
}
