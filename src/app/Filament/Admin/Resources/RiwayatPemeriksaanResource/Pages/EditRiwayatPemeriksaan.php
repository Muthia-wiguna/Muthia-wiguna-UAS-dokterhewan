<?php

namespace App\Filament\Admin\Resources\RiwayatPemeriksaanResource\Pages;

use App\Filament\Admin\Resources\RiwayatPemeriksaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRiwayatPemeriksaan extends EditRecord
{
    protected static string $resource = RiwayatPemeriksaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
