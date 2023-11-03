<?php

namespace App\Filament\Resources\AdminUploadResource\Pages;

use App\Filament\Resources\AdminUploadResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdminUpload extends ListRecords
{
    protected static string $resource = AdminUploadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
