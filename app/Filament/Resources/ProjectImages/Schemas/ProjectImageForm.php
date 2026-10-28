<?php

namespace App\Filament\Resources\ProjectImages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('project_id')
                    ->relationship('project', 'title')
                    ->required(),
                FileUpload::make('image_path')
                    ->image()
                    ->disk('publics')          // Points to your custom disk
                    ->directory('gallery')     // Saves into public/images/gallery
                    ->required()
                    ->visibility('public')
                    ->columnSpanFull(),
                TextInput::make('caption'),
            ]);
    }
}
