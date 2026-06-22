<?php

namespace App\Filament\Resources\Testimonials\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\TextSize;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use l3aro\FilamentRatingStar\Components\StarColumn;
use Mokhosh\FilamentRating\Columns\RatingColumn;

class TestimonialsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Stack::make([
                    TextColumn::make('name')
                        ->weight(FontWeight::ExtraBold)
                        ->size(TextSize::Large)
                        ->columnSpanFull()
                        ->searchable(),
                    TextColumn::make('position')
                        ->weight(FontWeight::ExtraLight)
                        ->columnSpanFull()
                        ->color('primary')
                        ->searchable(),
                    StarColumn::make('star'),
                    TextColumn::make('description'),
                    Split::make([
                        TextColumn::make('created_at')
                            ->weight(FontWeight::ExtraLight)
                            ->size(TextSize::ExtraSmall)
                            ->dateTime('F j, Y')
                            ->alignStart()
                            ->color('warning')
                            ->toggleable(isToggledHiddenByDefault: true),
                        TextColumn::make('project.name')
                            ->weight(FontWeight::Bold)
                            ->size(TextSize::ExtraSmall)
                            ->columnSpanFull()
                            ->alignEnd()
                            ->searchable(),
                    ])

//                    TextColumn::make('updated_at')
//                        ->dateTime()
//                        ->sortable()
//                        ->toggleable(isToggledHiddenByDefault: true),
//                    TextColumn::make('deleted_at')
//                        ->dateTime()
//                        ->sortable()
//                        ->toggleable(isToggledHiddenByDefault: true),
                ])
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
//                    DeleteBulkAction::make(),
//                    ForceDeleteBulkAction::make(),
//                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
