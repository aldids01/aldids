<?php

namespace App\Filament\Resources\Experiences\Schemas;

use App\Models\Experience;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ExperienceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('company'),
                TextEntry::make('address')
                    ->columnSpanFull(),
                TextEntry::make('description'),
                TextEntry::make('from')
                    ->date(),
                TextEntry::make('to')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Experience $record): bool => $record->trashed()),
            ]);
    }
}
