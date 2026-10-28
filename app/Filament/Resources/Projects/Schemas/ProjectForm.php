<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('cover_image')
                    ->image()
                    ->disk('publics')          // Points to your custom disk in config/filesystems.php
                    ->directory('covers')      // Saves into public/images/covers
                    ->required()
                    ->visibility('public')
                    ->columnSpanFull(),
                DatePicker::make('project_date'),
            ]);
    }
}
