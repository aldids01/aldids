<?php

namespace App\Livewire;

use App\Models\Contact;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Contacts extends Component implements HasActions, HasSchemas
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
               Grid::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Full Name')
                            ->placeholder('full name')
                            ->required(),
                        TextInput::make('email')
                            ->placeholder('example@email.com')
                            ->label('Email address')
                            ->email()
                            ->required(),
                    ])->columns(2),
                TextInput::make('subject')
                    ->placeholder('Support needed please')
                    ->required(),
                Textarea::make('message')
                    ->placeholder('Message here')
                    ->rows(10)
                    ->required()
                    ->columnSpanFull(),
                Actions::make([
                    Action::make('Save')
                        ->label('Sent message')
                        ->icon(Heroicon::PaperAirplane)
                        ->button()
                        ->action(fn()=> self::create())
                ])->fullWidth()->columnSpanFull()
            ])
            ->statePath('data')
            ->model(Contact::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = Contact::create($data);

        $this->form->model($record)->saveRelationships();

        $this->redirect(request()->header('Referer'));
        Notification::make()
            ->title('Your message has been sent')
            ->body("your message has been sent and check your inbox for response. Thank you for contacting us!")
            ->success()
            ->send();
    }

    public function render(): View
    {
        return view('livewire.contacts');
    }
}
