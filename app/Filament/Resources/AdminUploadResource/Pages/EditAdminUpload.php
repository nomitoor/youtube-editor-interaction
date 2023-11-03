<?php

namespace App\Filament\Resources\AdminUploadResource\Pages;

use App\Filament\Resources\AdminUploadResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdminUpload extends EditRecord
{
    protected static string $resource = AdminUploadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
