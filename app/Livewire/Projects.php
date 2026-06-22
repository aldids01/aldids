<?php

namespace App\Livewire;

use App\Filament\Tables\Columns\CustomCulumn;
use App\Models\Category;
use App\Models\Project;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Projects extends Component implements HasActions, HasSchemas, HasTable
{
    use InteractsWithActions;
    use InteractsWithTable;
    use InteractsWithSchemas;

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Project::query())
            ->columns([
                Stack::make([
                    CustomCulumn::make('id') // any existing attribute
                    ->label('')
                        ->state(fn ($record) => $record)
                        ->viewData(fn ($record) => [
                            'project' => $record,
                        ])
                ])
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])
            ->filters(
                Category::query()->get()->map(
                    fn ($category) =>
                    Filter::make('category_' . $category->id)
                        ->label($category->name)
                        ->query(fn (Builder $query) => $query->where('category_id', $category->id))
                )->toArray(),
                FiltersLayout::AboveContent
            )
            ->deferFilters(false)
            ->persistFiltersInSession();
    }

    public function render(): View
    {
        return view('livewire.projects');
    }
}
