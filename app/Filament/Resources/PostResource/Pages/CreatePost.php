<?php

namespace App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    // protected function handleRecordCreation(array $data): Post
    // {
    //     $record = parent::handleRecordCreation($data);

    //     $imageFile = $this->form->getState('image');
    //     if ($imageFile && isset($imageFile['image'])) {
    //         $url = $imageFile['image'];  // Directamente la parte del archivo que necesitas
    
    //         $record->image()->create([
    //             'imageable_id' => $record->id,
    //             'imageable_type' => get_class($record),
    //             'url' => $url  // Guarda la URL
    //         ]);
    //     }
    
    //     return $record;
    // }
}
