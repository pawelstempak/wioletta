<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StorageModel;
use Illuminate\Support\Facades\Storage;
use Image;

class ImagePreprocessingModel extends Model
{
    public function storeImage($request, $handle, $folder, $driver):string
    {
        $ufile = new StorageModel($request->file($handle), $folder, $driver);     
        $filename = $ufile->getName(); 

        $path = Storage::path('/public/'.$folder.'/'.$filename);
        Image::make($path)->resize(env('APARTMENT_IMAGE_WIDTH'), env('APARTMENT_IMAGE_HEIGHT'), function($constraint) {
            $constraint->aspectRatio();
        })->save($path, 70);  

        return $filename;
    }

    public function deleteImageFile(string $folder, string $filename):void
    {
        Storage::delete('/public/'.$folder.'/'.$filename);
    }    
}
