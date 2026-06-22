<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use l3aro\FilamentRatingStar\Components\StarInput;
use Mokhosh\FilamentRating\Components\Rating;
use Mokhosh\FilamentRating\RatingTheme;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('project_id')
                    ->relationship('project', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('position')
                    ->required(),
                StarInput::make('star')
                    ->label('Rating'),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
