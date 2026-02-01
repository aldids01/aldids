<?php

namespace App\Filament\Resources\Skills\Pages;

use App\Filament\Resources\Skills\SkillResource;
use App\Filament\Resources\Skills\Widgets\SkillsOverview;
use App\Models\Skill;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\Width;

class ListSkills extends ListRecords
{
    protected static string $resource = SkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->slideOver()
                ->modalCancelAction(false)
                ->modalWidth(Width::Small),
            Action::make('cardView')
                ->url(static::getResource()::getUrl('index'))
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            SkillsOverview::class,
        ];
    }
}
