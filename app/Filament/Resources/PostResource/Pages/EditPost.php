<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Models\Post;
use Filament\Actions;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // protected function handleRecordUpdate(Model $record, array $data): Model
    // {
    //     $record = parent::handleRecordUpdate($record, $data);
    //     $imageFile = $this->form->getState('image');
    //     if ($imageFile && isset($imageFile['image'])) {
    //         $url = $imageFile['image'];  // La URL de la imagen
    
    //         // Busca la imagen existente o crea una nueva si no existe
    //         $image = $record->image()->firstOrCreate([
    //             'imageable_id' => $record->id,
    //             'imageable_type' => get_class($record)
    //         ]);
    
    //         // Actualiza la URL en la base de datos
    //         $image->update(['url' => $url]);
    //     }
    
    //     return $record;
    // }

}
