<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Department;
use App\Models\TeamMember;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeamMemberResource\Pages;
use App\Filament\Resources\TeamMemberResource\RelationManagers;

class TeamMemberResource extends Resource
{
    use Translatable;

    protected static ?string $model = TeamMember::class;
    public static function getNavigationGroup(): ?string
    {
        return __('app.team');
    }
    protected static ?int $navigationSort=6;
    public static function getNavigationLabel(): string
    {
        return __('app.team_members');
    }

    public static function getModelLabel(): string
    {
        return __('app.team_members');
    }
        public static function getPluralModelLabel(): string
        {
            return __('app.team_members');
        }

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')
                        ->label(__('app.name'))
                        ->required()
                        ->maxLength(255),
                    FileUpload::make('image')
                        ->image()
                        ->required()
                        ->label(__('app.image')),
                    TextInput::make('title')
                        ->maxLength(255)
                        ->required()
                        ->label(__('app.position')),
                    Select::make('department_id')
                        ->relationship('department', 'name')
                        ->label(__('app.department_name'))
                        ->options(Department::all()->pluck('name', 'id'))
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('department.name')
                    ->numeric()
                    ->sortable()
                    ->label(__('app.department_name'))

                    ,
                ImageColumn::make('image')
                ->label(__('app.image'))

                ,
                TextColumn::make('name')
                    ->searchable()
                    ->label(__('app.name'))

                    ,
                TextColumn::make('title')
                ->label(__('app.position'))

                    ->searchable(),
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
                SelectFilter::make('department_id')
                    ->label('Department')
                    ->label(__('app.department_name'))
                    ->options(function () {
                        return Department::query()
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
            'index' => Pages\ListTeamMembers::route('/'),
            'create' => Pages\CreateTeamMember::route('/create'),
            'edit' => Pages\EditTeamMember::route('/{record}/edit'),
        ];
    }
}
