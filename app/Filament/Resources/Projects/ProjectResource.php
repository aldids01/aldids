<?php

namespace App\Filament\Resources\Projects;

use App\Filament\Resources\Projects\Pages\ManageProjects;
use App\Models\Project;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('company'),
                Repeater::make('technologies')
                    ->grid(2)
                    ->reorderable(false)
                    ->columnSpanFull()
                    ->simple(
                        TextInput::make('technologies')
                            ->required()
                    ),
                TextInput::make('client')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('mobile'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('budget')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('progress')
                    ->required()
                    ->default('0'),
                TextInput::make('status')
                    ->required(),
                DatePicker::make('from')
                    ->required(),
                DatePicker::make('to')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('technologies')
                    ->separator(',')
                    ->badge(),
                TextEntry::make('company')
                    ->placeholder('-'),
                TextEntry::make('client'),
                TextEntry::make('phone'),
                TextEntry::make('mobile')
                    ->placeholder('-'),
                TextEntry::make('email')
                    ->label('Email address')
                    ->placeholder('-'),
                TextEntry::make('budget')
                    ->numeric(),
                TextEntry::make('progress'),
                TextEntry::make('status'),
                TextEntry::make('from')
                    ->date(),
                TextEntry::make('to')
                    ->date(),
                TextEntry::make('user.name')
                    ->label('User'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Project $record): bool => $record->trashed()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->deferLoading(true)
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('technologies')
                    ->badge(),
                TextColumn::make('client')
                    ->searchable(),
                TextColumn::make('progress')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('from')
                    ->date()
                    ->sortable(),
                TextColumn::make('to')
                    ->date()
                    ->sortable(),
                TextColumn::make('user.name')
                    ->searchable(),
//                TextColumn::make('created_at')
//                    ->dateTime()
//                    ->sortable()
//                    ->toggleable(isToggledHiddenByDefault: true),
//                TextColumn::make('updated_at')
//                    ->dateTime()
//                    ->sortable()
//                    ->toggleable(isToggledHiddenByDefault: true),
//                TextColumn::make('deleted_at')
//                    ->dateTime()
//                    ->sortable()
//                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make()
                    ->slideOver()
                    ->modalWidth(Width::Small),
                EditAction::make()
                    ->slideOver()
                    ->modalWidth(Width::Small),
                DeleteAction::make(),
                ForceDeleteAction::make(),
                RestoreAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageProjects::route('/'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
