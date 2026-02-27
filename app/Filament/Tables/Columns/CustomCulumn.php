<?php

namespace App\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;

class CustomCulumn extends Column
{
    protected string $view = 'filament.tables.columns.custom-culumn';
    public function getState(): mixed
    {
        return $this->getRecord();
    }
}
