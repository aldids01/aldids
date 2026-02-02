<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
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
                Rating::make('star')
                    ->label('Rating')
                    ->size('xl')
                    ->theme(RatingTheme::Simple),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
