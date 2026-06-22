<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),

                TextInput::make('company')
                    ->required(),
                Textarea::make('address')
                    ->required(),
                Textarea::make('description')
                    ->required(),
                Repeater::make('achievements')
                    ->grid(3)
                    ->columnSpanFull()
                    ->simple(
                        TextInput::make('achievements')
                            ->required(),
                    ),

                DatePicker::make('from')
                    ->required(),
                DatePicker::make('to'),
            ]);
    }
}
