<?php

namespace App\Livewire;

use App\Models\Project;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class NewProject extends Component implements HasActions, HasSchemas
{
    use InteractsWithActions;
    use InteractsWithSchemas;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('company'),
                TextInput::make('technologies')
                    ->required(),
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
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
            ])
            ->statePath('data')
            ->model(Project::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = Project::create($data);

        $this->form->model($record)->saveRelationships();
    }

    public function render(): View
    {
        return view('livewire.new-project');
    }
}
