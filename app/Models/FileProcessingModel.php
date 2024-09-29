<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StorageModel;
use Illuminate\Support\Facades\Storage;

class FileProcessingModel extends Model
{
    use HasFactory;

    public function storeFile($request, $handle, $folder, $driver):string
    {
        $ufile = new StorageModel($request->file($handle), $folder, $driver);     
        $filename = $ufile->getName(); 
     
        return $filename;
    }

    public function deleteFile(string $folder, string $filename, string $driver):void
    {
        Storage::delete('/'.$driver.'/'.$folder.'/'.$filename);
    }    
  
}
