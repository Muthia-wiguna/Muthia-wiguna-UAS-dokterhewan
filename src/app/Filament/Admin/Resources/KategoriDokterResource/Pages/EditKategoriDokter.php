<?php

namespace App\Filament\Admin\Resources\KategoriDokterResource\Pages;

use App\Filament\Admin\Resources\KategoriDokterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriDokter extends EditRecord
{
    protected static string $resource = KategoriDokterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
