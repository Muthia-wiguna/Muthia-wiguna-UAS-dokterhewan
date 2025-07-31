<?php

namespace App\Filament\Admin\Resources\RiwayatPemeriksaanResource\Pages;

use App\Filament\Admin\Resources\RiwayatPemeriksaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRiwayatPemeriksaans extends ListRecords
{
    protected static string $resource = RiwayatPemeriksaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
