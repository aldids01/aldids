<?php

namespace App\Livewire;

use App\Models\Project;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Support\Enums\Width;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Enums\FiltersResetActionPosition;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class ProjectsTable extends Component implements HasActions, HasSchemas, HasTable
{
    use InteractsWithActions;
    use InteractsWithSchemas;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Project::query())
            ->heading('All Projects')
            ->description('Manage and track your development projects')
            ->deferLoading(true)
            ->columns([
                Split::make([
                    Stack::make([
                        TextColumn::make('name')
                            ->searchable(),
                        TextColumn::make('technologies')
                            ->badge(),
                    ]),
                    TextColumn::make('client')
                        ->searchable(),
                    TextColumn::make('phone')
                        ->searchable(),
                    TextColumn::make('budget')
                        ->numeric(),
                    TextColumn::make('progress')
                        ->searchable(),
                    TextColumn::make('status')
                        ->searchable(),
                    TextColumn::make('from')
                        ->date(),
                    TextColumn::make('to')
                        ->date(),
                    TextColumn::make('user.name')
                        ->numeric(),
                ]),

            ])
            ->filters([
                TrashedFilter::make(),
            ], layout: FiltersLayout::AboveContent)
            ->persistFiltersInSession()
            ->hiddenFilterIndicators()
            ->filtersResetActionPosition(FiltersResetActionPosition::Footer)
            ->headerActions([
                CreateAction::make()
                    ->schema(self::newProject())
                    ->modalWidth(Width::Small)
                    ->modalCancelAction(false)
                    ->slideOver(),
            ])
            ->recordActions([
                DeleteAction::make(),
                ViewAction::make()
                    ->schema(self::newProject())
                    ->modalWidth(Width::Small)
                    ->slideOver(),
                EditAction::make()
                    ->schema(self::newProject())
                    ->modalWidth(Width::Small)
                    ->modalCancelAction(false)
                    ->color('warning')
                    ->slideOver(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    private static function newProject(): array
    {
        return [
            Grid::make()
                ->schema([
                    TextInput::make('name')
                        ->required(),
                    TextInput::make('company'),
                    Repeater::make('technologies')
                        ->columnSpanFull()
                        ->grid()
                        ->reorderable(false)
                        ->simple(
                            TextInput::make('technologies')
                                ->required(),
                        ),
                    TextInput::make('client')
                        ->required(),
                    TextInput::make('phone')
                        ->tel()
                        ->required(),
                    TextInput::make('mobile'),
                    TextInput::make('email')
                        ->unique()
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
                ])->columns(2),
        ];
    }

    public function render(): View
    {
        return view('livewire.projects-table');
    }
}
