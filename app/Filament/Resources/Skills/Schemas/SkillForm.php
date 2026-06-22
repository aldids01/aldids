<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('skill_category_id')
                    ->relationship('skill_category', 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                            ->required(),
                        TextArea::make('description')
                    ])->createOptionModalHeading('New Skill Category')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('level')
                    ->required()
                    ->numeric(),
                TextInput::make('years')
                    ->required()
                    ->numeric(),
            ])->columns(1);
    }
}
