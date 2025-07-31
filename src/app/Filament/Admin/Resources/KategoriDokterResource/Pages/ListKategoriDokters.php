<?php

namespace App\Filament\Admin\Resources\KategoriDokterResource\Pages;

use App\Filament\Admin\Resources\KategoriDokterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriDokters extends ListRecords
{
    protected static string $resource = KategoriDokterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
