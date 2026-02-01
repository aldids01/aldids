<?php

namespace App\Filament\Resources\Skills\Pages;

use App\Filament\Resources\Skills\Schemas\SkillForm;
use App\Filament\Resources\Skills\SkillResource;
use App\Models\Skill;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\Page;
use Filament\Support\Enums\Width;

class SkillCardView extends Page
{
    protected static string $resource = SkillResource::class;

    protected string $view = 'filament.resources.skills.pages.skill-page';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->slideOver()
                ->modalCancelAction(false)
                ->schema(fn($schema) =>SkillForm::configure($schema))
                ->modalWidth(Width::Small),
            Action::make('tableView')
                ->url(static::getResource()::getUrl('card-view'))
        ];
    }
    protected function getViewData(): array
    {
        return [
            'categories' => \App\Models\SkillCategory::query()->get(),
        ];
    }

    public function deleteSkillAction(): DeleteAction
    {
        return DeleteAction::make('deleteSkill')
            ->record(fn (array $arguments) => Skill::find($arguments['skill']))
            ->requiresConfirmation()
            ->modalHeading('Delete Skill')
            ->modalDescription('Are you sure you want to delete this skill? This cannot be undone.')
            ->successNotificationTitle('Skill deleted');
    }
}
