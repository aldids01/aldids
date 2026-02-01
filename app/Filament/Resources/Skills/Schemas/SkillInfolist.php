<?php

namespace App\Filament\Resources\Skills\Schemas;

use App\Models\Skill;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SkillInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('skill_category.name')
                    ->label('Skill category'),
                TextEntry::make('name'),
                TextEntry::make('level')
                    ->numeric(),
                TextEntry::make('years')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Skill $record): bool => $record->trashed()),
            ]);
    }
}
